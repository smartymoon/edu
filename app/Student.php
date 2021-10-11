<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\Boolean;

class Student extends Authenticatable
{
    protected $fillable = ['name', 'password', 'email', 'school_id', 'line_id'];
    protected $hidden = ['password'];
    const Student = 'student';

    use Notifiable, HasApiTokens;

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function followedTeachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class, 'follows');
    }

    public function hasBindLine(): Boolean
    {
        return is_null($this->line_id);
    }

    public function bindToLine($line_id)
    {
        $this->line_id = $line_id;
        $this->save();
    }
}
