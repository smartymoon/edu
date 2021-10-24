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

    public function loginUsingId(Request $request)
    {
        $validated = $this->validate($request, [
            'type' => 'required',
            'user_id' => 'required',
            'official_id' => 'required'
        ]);

        if ($validated['type'] === Student::Student)
        {
            $user =  Student::findOrFail($validated['user_id']);
            $scope = Student::Student;
        } else if ($validated['type'] === 'teacher') {
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
            // \Log::info('body', $request->json());
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

        if ($user instanceof Teacher && Teacher::where('line_id', $line_id)->count()) {
            return $this->fail('this line account already bind a teacher');
        }

        $user->line_id = $line_id;
        $user->save();
        return $this->success('bind line successfully');
    }
}
