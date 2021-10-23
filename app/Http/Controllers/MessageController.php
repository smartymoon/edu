<?php

namespace App\Http\Controllers;

use App\Message;
use App\School;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MessageController extends Controller
{
    public function sendTeacherMessage(Request $request)
    {
        $message = new Message();

        $validated = $this->validate($request, [
            'toId' => 'required|int',
            'message' => 'required|string',
        ]);

        $student = Student::select('school_id')->findOrFail($validated['toId']);

        if ($student->school->principal_id != $request->user()->id) {
            if ($student->school_id != $request->user()->school_id) {
                return $this->fail('you are not allowed to sent message with this student');
            }
        }

        try {
            $message->sendMessage(
                Message::Teacher,
                $request->user()->id,
                Message::Teacher,
                Message::Student,
                $validated['toId'],
                $validated['message']
            );
        } catch (\Exception $e) {
            \Log::error('send Message Error ' .   $e->getMessage());
            return $this->fail('message send failed, please try again later');
        }

        return $this->success('', $message);
    }

    public function getTeacherUnreadMessages(Request $request)
    {
        return Message::getUnreadMessage(
            Message::Teacher,
            $request->user()->id
        );
    }

    public function getTeacherMessageFrom($fromId, Request $request)
    {
        return Message::getMessageFrom(
            Message::Student,
            $fromId + 0,
            Message::Teacher,
            $request->user()->id
        );
    }

    public function sendStudentMessage(Request $request)
    {
        $message = new Message();

        $validated = $this->validate($request, [
            'toId' => 'required|int',
            'message' => 'required|string',
        ]);

        if ($request->user()->school->principal_id != $validated['toId']) {
            $teacher = Teacher::select(['school_id'])->findOrFail($validated['toId']);
            if ($teacher->school_id != $request->user()->school_id) {
               return $this->fail("you are not allowed to talk with this teacher");
            }
        }

        try {
            $message->sendMessage(
                Message::Student,
                $request->user()->id,
                $request->user()->name,
                Message::Teacher,
                $validated['toId'],
                $validated['message']
            );
        } catch (\Exception $e) {
            \Log::error('send Message Error ' .   $e->getMessage());
            return $this->fail('message send failed, please try again later');
        }

        return $this->success('', $message);
    }

    public function getStudentUnreadMessages(Request $request)
    {
        return Message::getUnreadMessage(
            Message::Student,
            $request->user()->id
        );
    }

    public function getStudentMessageFrom($fromId, Request $request)
    {
        return Message::getMessageFrom(
            Message::Teacher,
            $fromId + 0,
            Message::Student,
            $request->user()->id
        );
    }

    public function setSeen(Message $message, Request $request)
    {
        if ($message->to_id !== $request->user()->id) {
            return $this->fail('message not belong to you');
        }
        $message->seen = true;
        $message->save();
        return $this->success();
    }

    public function checkAdminMessage(Request $request)
    {
        $count =  $request->user()->adminMessage()->latest()->select(['id', 'message', 'created_at'])->where('seen', false)->count();
        return $this->success($count ? 'you have ' . $count . ' unread admin messages' : '', $count);
    }

    public function getAdminMessage(Request $request)
    {
        $query = $request->user()->adminMessage()->latest()->select(['id', 'message', 'created_at']);
        $messages = $request->user()->adminMessage()->latest()->select(['id', 'message', 'created_at'])->get();
        $query->where('seen', false)->update(['seen' => true]);
        return $messages;
    }

}
