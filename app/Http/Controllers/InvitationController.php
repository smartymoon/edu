<?php

namespace App\Http\Controllers;

use App\Invitation;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Webpatser\Uuid\Uuid;

class InvitationController extends Controller
{
    public function index(Request $request)
    {
        $loginTeacher = $request->user();
        return $loginTeacher->invitations()->with(['school:id,name'])->get();
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
           'teacher_email' => 'required|unique:teachers,email',
           'school_id' => 'required'
        ]);

        $invitation = Invitation::create([
            'slug' => Uuid::generate()->string,
            'principal_id' => $request->user()->id,
            'school_id' => $validated['school_id'],
            'email' => $validated['teacher_email'],
            'if_register' => false
        ]);

        // send email
        $url = config('app.vite_url') . '/#/invitation?slug=' .  $invitation->slug;
        Mail::to('smartymoon@foxmail.com')->send(new InvitationMail($invitation, $url));


        return $this->success('invitation email was sent', [
            'url' => $url
        ]);
    }
}
