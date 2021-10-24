<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMessage extends Model
{
    protected $guarded = [];

    public function messageable()
    {
        return $this->morphTo();
    }
}
