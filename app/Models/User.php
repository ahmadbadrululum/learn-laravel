<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function passport()
    {
        // name_id, id 
        return $this->hasOne('App\Models\Passport');
    }
    public function forums()
    {
        // name_id, id 
        return $this->hasMany('App\Models\Forum');
    }

    public function lessons()
    {
        // name_id, id
        return $this->belongsToMany('App\Models\Lesson');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
