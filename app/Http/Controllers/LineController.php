<?php

namespace App\Http\Controllers;

use App\LineUser;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Socialite\Facades\Socialite;
use \LINE\Laravel\Facade\LINEBot;
use LINE\LINEBot\Constant\HTTPHeader;
use LINE\LINEBot\Event\MessageEvent;
use LINE\LINEBot\Event\MessageEvent\TextMessage;
use LINE\LINEBot\Exception\InvalidEventRequestException;
use LINE\LINEBot\Exception\InvalidSignatureException;

class LineController extends Controller
{
    public function redirectToLine()
    {
        return Socialite::driver('line')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('line')->stateless()->user();
        } catch (\Exception $e) {
            return 'error happened';
        }
        LineUser::firstOrCreate([ 'official_id' => $user->id], ['name' => $user->name]);
        return redirect(config('app.vite_url') . '/#/line/login?official_id=' . $user->id);
    }

    public function getBindUsers($official_id)
    {
        $lineUser = LineUser::where('official_id', $official_id)->firstOrFail();
        $teachers = Teacher::where('line_id', $lineUser->id)->select(['id', 'name', 'email'])->get();
        $students = Student::where('line_id', $lineUser->id)->select(['id', 'name', 'email'])->get();

        $bindUsers = [];
        foreach ($teachers as $teacher) {
            $bindUsers[] = $teacher->toArray() + ['role' => 'teacher'];
        }
        foreach ($students as $student) {
            $bindUsers[] = $student->toArray() + ['role' => 'student'];
        }
        return $bindUsers;
    }

    public function bindUser($official_id, Request $request)
    {
        $validated = $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        $lineUser = LineUser::where('official_id', $official_id)->firstOrFail();

        $teacher = Teacher::where('email', $validated['email'])->first();
        if ($teacher) {
            if ($lineUser->hasBindTeacher()) {
                return $this->fail("you can only bind line to most one teacher account");
            } elseif ($teacher->hasBindLine()) {
                return $this->fail("email {$validated['email']}  has already bind to a line user");
            } elseif (!\Hash::check($validated['password'], $teacher->password)) {
                return $this->fail("password is wrong");
            } else {
                $teacher->bindToLine($lineUser->id);
                // give a token and role
                return $this->success('bind successful', [
                    'role' => $teacher->role,
                    'auth' => $teacher->createToken('After Bind Line', [$teacher->role]),
                    'user' => [
                        'id' => $teacher->id,
                        'email' => $teacher->email,
                        'name' => $teacher->name,
                        'school_id' => $teacher->school_id
                    ]
                ]);
            }
        }

        $student = Student::where('email', $validated['email'])->first();
        if ($student) {
            if ($student->hasBindLine()) {
                return $this->fail("email {$validated['email']}  has already bind to a line user");
            } elseif (!\Hash::check($validated['password'], $student->password)) {
                return $this->fail("password is wrong");
            } else {
                $student->bindToLine($lineUser->id);
                return $this->success('bind successful', [
                    'role' => Student::STUDENT,
                    'auth' => $student->createToken('After Bind Line', [Student::STUDENT]),
                    'user' => [
                        'id' => $student->id,
                        'email' => $student->email,
                        'name' => $student->name,
                        'school_id' => $student->school_id
                    ]
                ]);
            }
        }

        return $this->fail("email {$validated['email']}  not exists");
    }

    public function loginUsingId(Request $request)
    {
        $validated = $this->validate($request, [
            'type' => 'required',
            'user_id' => 'required',
            'official_id' => 'required'
        ]);

        if ($validated['type'] === Student::STUDENT) {
            $user =  Student::findOrFail($validated['user_id']);
            $scope = Student::STUDENT;
        } elseif ($validated['type'] === 'teacher') {
            $user =  Teacher::findOrFail($validated['user_id']);
            $scope = $user->role;
        } else {
            return $this->fail('login fail');
        }

        if (!$user->line || $user->line->official_id != $validated['official_id']) {
            return $this->fail('login fail');
        }


        // issue token
        return $this->success('login successful', [
            'role' => $scope,
            'auth' => $user->createToken('login by line', [$scope]),
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'school_id' => $user->school_id
            ]
        ]);
    }

    public function messageCallback(Request $request)
    {
        $signature = $request->header(HTTPHeader::LINE_SIGNATURE);
        if (empty($signature)) {
            return $this->fail('500', 'no signature');
        }

        // Check request with signature and parse request
        try {
            $events = LINEBot::parseEventRequest($request->getContent(), $signature);
        } catch (InvalidSignatureException $e) {
            return $this->fail('Invalid signature: ' . $e->getMessage());
        } catch (InvalidEventRequestException $e) {
            return $this->fail('Invalid event request');
        }

        foreach ($events as $event) {
            if (!($event instanceof MessageEvent)) {
                \Log::info('Non message event has come');
                continue;
            }

            if (!($event instanceof TextMessage)) {
                \Log::info('Non text message has come');
                continue;
            }

            $replyText = $event->getText();
            \Log::info('Reply text: ' . $replyText);
            $resp = LINEBot::replyText($event->getReplyToken(), $replyText);
            \Log::info($resp->getHTTPStatus() . ': ' . $resp->getRawBody());
        }
        return 'ok';
    }

    public function bindAuthUser(Request $request)
    {
        $validated = $this->validate($request, [
            'official_id' => 'required|exists:line_users,official_id'
        ]);

        $line_id = LineUser::where('official_id', $validated['official_id'])->value('id');
        $user = $request->user();

        if ($user instanceof Teacher) {
            $bindTeachers = Teacher::where('line_id', $line_id)->select('id')->get();
            if ($bindTeachers->count() === 1 && $bindTeachers[0]->id !== $user->id) {
                return $this->fail('this line account already bind a teacher');
            }
        }

        $user->line_id = $line_id;
        $user->save();
        return $this->success('bind line successfully');
    }
}
