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
        $user = Socialite::driver('line')->stateless()->user();
        return $user;
        // return redirect('/line/login?official_id=' . '  ');
    }

    // todo make api
    public function getBindUsers($official_id)
    {
        $lineUser = LineUser::where('official_id', $official_id)->firstOrFail();
        $teachers = Teacher::where('line_id', $lineUser->id)->select(['id', 'name', 'email'])->get();
        $students = Student::where('line_id', $lineUser->id)->select(['id', 'name', 'email'])->get();

        $bindUsers = [];
        foreach ($teachers as $teacher) {
            $bindUsers[] = $teacher + ['role' => 'teacher'];
        }
        foreach ($students as $student) {
            $bindUsers[] = $student + ['role' => 'student'];
        }
        return $bindUsers;
    }

    // todo make api
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
                    'tokenInfo' => $teacher->createToken('After Bind Line', [$teacher->role])
                ]);
            }
        }

        $student = Student::where('email', $validated['email'])->first();
        if ($student) {
            if ($student->hasBindLine()) {
                return $this->fail("email {$validated['email']}  has already bind to a line user");
            } else if (!\Hash::check($validated['password'], $teacher->password)){
                return $this->fail("password is wrong");
            } else {
                $student->bindToLine($lineUser->id);
                return $this->success('bind successful', [
                    'role' => Student::Student,
                    'tokenInfo' => $teacher->createToken('After Bind Line', [Student::Student])
                ]);
            }
        }

        return $this->fail("email {$validated['email']}  not exists");
    }
}
