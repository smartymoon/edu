<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Teacher extends Authenticatable
{
    use Notifiable, HasApiTokens;

    const Principal =  'principal';
    const Normal =  'normal';

    protected $guarded = [];

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
}
