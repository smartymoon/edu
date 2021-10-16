<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineUser extends Model
{
    //
    protected $fillable = ['official_id', 'name'];

    public function relativeUsers()
    {

    }

    public function bindUser(Model $user)
    {
        $user->line_id = $this->id;
        $user->save();
    }

    public function hasBindTeacher()
    {
        return Teacher::where('line_id', $this->id)->count() > 0;
    }
}