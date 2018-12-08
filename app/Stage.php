<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\users;

class Stage extends Model
{
    protected $table = 'stages';
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    public function user()
    {
        return $this->belongsTo('App\User')->withTimestamps();
    }

}
