<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class School extends Model
{
    protected $fillable = ['name', 'principal_id', 'if_approve'];

    public function principal(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'principal_id');
    }
}
