<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $fillable = ['name', 'password', 'email', 'school_id'];
    protected $hidden = ['password'];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

}
