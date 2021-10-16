<?php

namespace App\Http\Controllers;

use App\LineUser;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Socialite\Facades\Socialite;

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
        return redirect('/line/login?official_id=' . $user->id);
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
            } else if ($teacher->hasBindLine()) {
                return $this->fail("email {$validated['email']}  has already bind to a line user");
            } else if (!\Hash::check($validated['password'], $teacher->password)) {
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
            } else if (!\Hash::check($validated['password'], $student->password)){
                return $this->fail("password is wrong");
            } else {
                $student->bindToLine($lineUser->id);
                return $this->success('bind successful', [
                    'role' => Student::Student,
                    'auth' => $student->createToken('After Bind Line', [Student::Student]),
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

        if ($validated['type'] === Student::Student)
        {
            $user =  Student::findOrFail($validated['user_id']);
        } else if ($validated['type'] === Teacher::Principal || $validated['type'] === Teacher::Normal) {
            $user =  Teacher::findOrFail($validated['user_id']);
        } else {
            return $this->fail('login fail');
        }

        if ($user->lineUser->official_id != $validated['official_id']) {
            return $this->fail('login fail');
        }

        // issue token
        return $this->success('login successful', [
            'role' => $validated['type'],
            'auth' => $user->createToken('login by line', [$validated['type']]),
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'school_id' => $user->school_id
            ]
        ]);
    }
}
