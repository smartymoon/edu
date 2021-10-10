<?php

namespace App\Http\Controllers;

use App\Student;
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
}
