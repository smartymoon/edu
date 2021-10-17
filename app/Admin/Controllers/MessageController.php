<?php

namespace App\Admin\Controllers;

use App\AdminMessage;
use App\Student;
use App\Teacher;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class MessageController extends AdminController
{
    public function send(Request $request)
    {
        \Log::info('hello admin send', $request->all());

        if ($request->input('type') === 'teacher') {
            $user = Teacher::find($request->input('user_id'));
        } else {
            $user = Student::find($request->input('user_id'));
        }

        $user->adminMessage()->save(new AdminMessage(['message' => $request->input('message')]));

        return redirect()->back();
    }
}
