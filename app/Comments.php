<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    public function article(){
        return $this->belongsTo('App\Article','article_id','id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
