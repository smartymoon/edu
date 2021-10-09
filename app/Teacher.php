<?php

namespace App;

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
}
