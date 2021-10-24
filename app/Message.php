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

    public function sendMessage($fromType, $fromId, $fromName, $toType, $toId, $message)
    {
        $this->from_type = $fromType;
        $this->from_id = $fromId;
        $this->to_type = $toType;
        $this->to_id = $toId;
        $this->message = $message;
        $this->seen = false;

        $this->save();
        broadcast(new \App\Events\Chat($this->toArray(), $fromName));
    }

    public static function getUnreadMessage($userType, $userId)
    {
        return self::where('to_type', $userType)->where('to_id', $userId)->where('seen', false)->get();
    }

    public static function getMessageFrom($fromType, $fromId, $toType, $toId)
    {
        $query = self::where(function ($query) use ($fromId, $fromType, $toId, $toType) {
            $query->where('from_type', $fromType)
                    ->where('from_id', $fromId)
                    ->where('to_type', $toType)
                    ->where('to_id', $toId);
        })->orWhere(function ($query) use ($fromId, $fromType, $toId, $toType) {
            $query->where('from_type', $toType)
                ->where('from_id', $toId)
                ->where('to_type', $fromType)
                ->where('to_id', $fromId);
        });

        $messages = $query->get();
        $query->update(['seen' => true]);
        return $messages;
    }

}
