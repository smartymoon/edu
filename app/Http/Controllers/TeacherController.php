<?php

namespace App\Http\Controllers;

use App\Follows;
use App\Invitation;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function showInvitation(string $slug)
    {
        return Invitation::where('slug', $slug)->with(['school:id,name', 'principal:id,name'])->firstOrFail();
    }

    public function storeNormalTeacher(Request $request)
    {
        $validated = $this->validate($request, [
           'slug' => 'required',
           'name' => 'required|string|max:20',
           'password' => 'required|string|min:6|confirmed',
       ]);

        $invitation = Invitation::where('slug', $validated['slug'])->first();

        if ($invitation->if_register) {
            return $this->fail('You already registered');
        }


        $teacher = null;
        \DB::transaction(function () use ($validated, $invitation, &$teacher) {
            $teacher = Teacher::create([
                'name' => $validated['name'],
                'email' => $invitation->email,
                'password' => bcrypt($validated['password']),
                'role' => Teacher::NORMAL,
                'school_id' => $invitation->school_id,
            ]);
            $invitation->if_register = true;
            $invitation->save();
        });

        return $this->success(
            'Welcome '. $teacher->name,
            [
                'role' => $teacher->role,
                'auth' => $teacher->createToken('After invitation', [Teacher::NORMAL]),
                'user' => [
                    'id' => $teacher->id,
                    'email' => $teacher->email,
                    'name' => $teacher->name,
                    'school_id' => $teacher->school_id
                ]
            ]
        );
    }

    public function studentsFollowMe(Request $request)
    {
        $teacher = $request->user();
        $students = Follows::where('teacher_id', $teacher->id)
            ->leftJoin('students', 'follows.student_id', '=', 'students.id')
            ->select(['students.id', 'students.name'])
            ->get();
        return $students;
    }
}
