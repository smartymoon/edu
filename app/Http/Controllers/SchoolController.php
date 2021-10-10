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
}
