<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    protected $hidden = ['updated_at'];

    const Teacher = 'teacher';
    const Student = 'student';
    const Admin = 'admin';

    public static function getFromRoles(): array
    {
        return [
            self::Teacher,
            self::Student,
            self::Admin,
        ];
    }

    public static function getToRoles(): array
    {
        return [
            self::Teacher,
            self::Student,
        ];
    }

    public function sendMessage($fromType, $fromId, $toType, $toId, $message)
    {
        // check receiver online
        $this->from_type = $fromType;
        $this->from_id = $fromId;
        $this->to_type = $toType;
        $this->to_id = $toId;
        $this->message = $message;

        if ($this->checkOnline($toType, $toId)) {
            $this->seen = true;
            // todo send websocket, sent to other
        } else {
            $this->seen = false;
        }
        $this->save();
    }

    public static function getUnreadMessage($userType, $userId)
    {
        return self::where('to_type', $userType)->where('to_id', $userId)->where('seen', false)->get();
    }

    public static function getMessageFrom($fromType, $fromId, $toType, $toId)
    {
        return self::where('from_type', $fromType)
                    ->where('from_id', $fromId)
                    ->where('to_type', $toType)
                    ->where('to_id', $toId)
                    ->get();
    }

    private function checkOnline($toType, $toId): bool
    {
        // todo after websocket
        return false;
    }
}
