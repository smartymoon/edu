<?php

namespace App\Http\Controllers;

use App\Follows;
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

        // todo union index to_id to_type
        $subMessages = \DB::table('messages')
            ->where('seen', false)
            ->where('to_id', $student->id)
            ->where('to_type', 'student')
            ->groupBy('from_id');

        /* shit sub query not work on 5.5
        $teachers = Teacher::where('school_id', $student->school_id)->orWhere('teachers.id', $student->school->principal_id)
            ->leftJoin('follows', function($join) use ($student) {
               $join->on('teachers.id', '=', 'follows.teacher_id')
                    ->where('follows.student_id', $student->id);
            })
            ->leftJoin($subMessages, 'filtered_messages', function($join) use ($student) {
                $join->on('filtered_messages.from_id', '=', 'teachers.id');
            })
            ->select(['teachers.id', 'follows.id as follow_id', 'teachers.name', 'teachers.email', \DB::raw('count(messages.id) as unread')])
            ->get();
        */
        return \DB::select("
            select teachers.id, follows.id as follow_id, teachers.name, teachers.email, unread from teachers
                left join follows on teachers.id = follows.teacher_id and follows.student_id = ?
                left join (select count(messages.id) as unread, from_id from messages 
                            where seen IS FALSE and to_id = ? and to_type = 'student' and from_type = 'teacher' 
                            group by from_id) as filtered_messages on filtered_messages.from_id = teachers.id
                where teachers.school_id = ? or teachers.id = ?
        ", [$student->id, $student->id, $student->school_id, $student->school->principal_id]);
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
