<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function comments(){
        return $this->hasMany('App\Comments','article_id','id');
    }
}
