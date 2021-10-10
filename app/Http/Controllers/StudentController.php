<?php

namespace App\Http\Controllers;

use App\Follows;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:teachers',
            'password' => 'required|string|min:6|confirmed',
            'school_id' => 'required'
        ]);

        $student = Student::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'school_id' => $validated['school_id'],
        ]);

        return $this->success('student added', $student);
    }

    public function teachers(Request $request)
    {
        $student = $request->user();
        $teachers = Teacher::where('school_id', $student->school_id)->orWhere('teachers.id', $student->school->principal_id)
            ->leftJoin('follows', function($join) use ($student) {
               $join->on('teachers.id', '=', 'follows.teacher_id')
                    ->where('follows.student_id', $student->id);
            })->select(['teachers.id', 'follows.id as follow_id', 'teachers.name'])
            ->get();

        return $teachers;
    }

    public function follow(Teacher $teacher, Request $request)
    {
        $student = $request->user();
        if (Follows::where('teacher_id', $teacher->id)->where('student_id', $student->id)->value('id')) {
            return $this->fail('you have already followed '. $teacher->name);
        } else {
            $student->followedTeachers()->attach($teacher->id);
        }
        return $this->success('follow success');
    }

    public function unfollow(Teacher $teacher, Request $request)
    {
        $student = $request->user();
        if (Follows::where('teacher_id', $teacher->id)->where('student_id', $student->id)->value('id')) {
            $student->followedTeachers()->detach($teacher->id);
        } else {
            return $this->fail('you can not unfollow someone you never followed');
        }
        return $this->success('unfollow success');
    }
}
