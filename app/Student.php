<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $fillable = ['name', 'password', 'email', 'school_id'];
    protected $hidden = ['password'];
    const Student = 'student';

    use Notifiable, HasApiTokens;

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

}
