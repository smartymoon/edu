<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Teacher extends Authenticatable
{
    use Notifiable, HasApiTokens;

    const PRINCIPAL =  'principal';
    const NORMAL =  'normal';

    protected $guarded = [];
    protected $hidden = ['password'];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function line(): BelongsTo
    {
        return $this->belongsTo(LineUser::class, 'line_id');
    }

    public function findForPassport($email)
    {
        return $this->where('email', $email)->first();
    }

    public function manageSchools(): HasMany
    {
        return $this->hasMany(School::class, 'principal_id');
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class, 'principal_id');
    }

    public function studentsFollowMe(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'follows');
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
