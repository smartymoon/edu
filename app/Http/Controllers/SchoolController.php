<?php

namespace App\Http\Controllers;

use App\School;
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
            'name' => 'required'
        ]);

        $school = School::create([
            'name' => $request->name,
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

        return $school->students;
    }
}
