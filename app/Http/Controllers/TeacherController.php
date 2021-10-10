<?php

namespace App\Http\Controllers;

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
        \DB::transaction(function()  use ($validated, $invitation, &$teacher){
            $teacher = Teacher::create([
                'name' => $validated['name'],
                'email' => $invitation->email,
                'password' => bcrypt($validated['password']),
                'role' => Teacher::Normal,
            ]);
            $invitation->if_register = true;
            $invitation->save();
        });

        return $this->success(
            'Welcome '. $teacher->name,
            $teacher->createToken('After invitation', [Teacher::Normal])
        );
    }

    public function students()
    {

    }

    public function studentsFollowMe()
    {

    }
}
