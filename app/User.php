<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'users';

    public function articles(){
        return $this->hasMany('App\Article','user_id','id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','user_id','id');
    }
}
