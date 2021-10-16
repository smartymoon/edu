<?php

namespace App\Http\Controllers;

use App\Message;
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

        try {
            $message->sendMessage(
                Message::Teacher,
                $request->user()->id,
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

        try {
            $message->sendMessage(
                Message::Student,
                $request->user()->id,
                Message::Teacher,
                $validated['toId'],
                $validated['message']
            );
        } catch (\Exception $e) {
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
}
