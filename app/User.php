<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','numRegis'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function stages()
    {
        return $this->belongsToMany('App\Stage')->withTimestamps();

    }
    public function stage()
    {
        return $this->hasMany('App\Stage');

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
