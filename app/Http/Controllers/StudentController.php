<?php

namespace App\Http\Controllers;

use App\Follows;
use App\Message;
use App\School;
use App\Student;
use App\Teacher;
use Encore\Admin\Auth\Database\Role;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'student_name' => 'required|string|max:20',
            'student_email' => 'required|string|email|max:255|unique:teachers,email|unique:students,email',
            'password' => 'required|string|min:6|confirmed',
            'school_id' => 'required'
        ]);

        $student = Student::create([
            'name' => $validated['student_name'],
            'email' => $validated['student_email'],
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
            })->select(['teachers.id', 'follows.id as follow_id', 'name', 'email'])->get();

        $messages = Message::select('from_id')
                ->where('seen', false)
                ->where('to_id', $student->id)
                ->where('to_type', 'student')
                ->where('from_type', 'teacher')->groupBy('from_id')->pluck('from_id');

        return $teachers->map(function($teacher) use ($messages) {
            $teacher->unread = $messages->contains($teacher->id);
            return $teacher;
        });
    }

    public function follow(Teacher $teacher, Request $request)
    {
        $student = $request->user();

        if ($student->school->principal_id != $teacher->id) {
            if ($teacher->school_id != $student->school_id) {
                return $this->fail('you can not follow teacher of other school');
            }
        }

        if (Follows::where('teacher_id', $teacher->id)->where('student_id', $student->id)->value('id')) {
            return $this->fail('you have already followed '. $teacher->name);
        } else {
            $follow = $student->followedTeachers()->attach($teacher->id);
        }
        return $this->success('follow success', $follow);
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
