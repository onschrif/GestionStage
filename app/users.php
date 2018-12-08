<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    public function stages()
    {
        return $this->belongsToMany('App\Stage')->withTimestamps();
    }
    public function stage()
    {
        return $this->hasMany('App\Stage')->withTimestamps();

    }
    public function stage_users()
    {
        return $this->hasMany('App\Stage_Users')->withTimestamps();

    }
    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

}
