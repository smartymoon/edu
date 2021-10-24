<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invitation extends Model
{
    protected $fillable = ['principal_id', 'school_id', 'email', 'if_register', 'slug'];
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function principal(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'principal_id');
    }
}
