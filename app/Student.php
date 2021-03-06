<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $fillable = ['name', 'password', 'email', 'school_id', 'line_id'];
    protected $hidden = ['password'];
    const STUDENT = 'student';

    use Notifiable, HasApiTokens;

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function followedTeachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class, 'follows');
    }

    public function line(): BelongsTo
    {
        return $this->belongsTo(LineUser::class);
    }

    public function hasBindLine(): bool
    {
        return !is_null($this->line_id);
    }

    public function bindToLine($line_id)
    {
        $this->line_id = $line_id;
        $this->save();
    }

    public function adminMessage()
    {
        return $this->morphOne(AdminMessage::class, 'messageable');
    }
}
