<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entreprises';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address','mail,status'];

    public function user()
    {
        return $this->hasOne('App\users')->withTimestamps();;
    }
}
