<?php

namespace App\Http\Controllers;

use App\Follows;
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

        return \DB::select("
            select students.id, follows.id as follow_id, students.name, students.email, unread from students
                left join follows on students.id = follows.student_id and follows.teacher_id = ?
                left join (select count(messages.id) as unread, from_id from messages 
                            where seen IS FALSE and to_id = ? and to_type = 'teacher' and from_type = 'student' 
                            group by from_id) as filtered_messages on filtered_messages.from_id = students.id
                where students.school_id = ?
        ", [$teacher->id, $teacher->id, $school->id]);
    }
}
