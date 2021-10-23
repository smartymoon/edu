<?php

namespace App\Http\Controllers;

use App\Follows;
use App\Message;
use App\School;
use App\Student;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(Request $request)
    {
        return $request->user()->manageSchools()->orderBy('if_approve', 'desc')->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'school_name' => 'required|unique:schools,name'
        ]);

        $school = School::create([
            'name' => $request->school_name,
            'principal_id' => $request->user()->id,
            'if_approve' => false
        ]);

        return $this->success('school created, wait approving', $school);
    }

    public function students(School $school, Request $request)
    {
        $teacher = $request->user();
        if (!$school->if_approve) {
            return $this->fail('this school is not approved');
        }

        if ($school->principal_id != $teacher->id && $teacher->school_id != $school->id) {
            return $this->fail('sorry, you do not have permission to see students in other school');
        }


        $students = Student::where('school_id', $school->id)
            ->leftJoin('follows', function($join) use ($teacher) {
                $join->on('follows.student_id', '=', 'students.id')
                    ->where('follows.teacher_id', $teacher->id);
            })->select(['students.id', 'follows.id as follow_id', 'name', 'email'])->get();

        $messages = Message::select('from_id')
            ->where('seen', false)
            ->where('to_id', $teacher->id)
            ->where('to_type', 'teacher')
            ->where('from_type', 'student')->groupBy('from_id')->pluck('from_id');

        return $students->map(function($student) use ($messages) {
            $student->unread = $messages->contains($student->id);
            return $student;
        });
    }
}
