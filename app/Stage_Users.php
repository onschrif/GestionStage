<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage_Users extends Model
{
    protected $table = 'stage_user';
    public function user()
    {
        return $this->belongsTo('App\users')->withTimestamps();
    }
}
