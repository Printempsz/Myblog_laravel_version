<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Article;

class DetailController extends Controller
{
    public function query(\App\Article $article){
        $comments = $article->comments()->get();
        $username = $article->user()->first()->username;
        return view('detail',['detail'=>$article,
                                    'comments'=>$comments,
                                    'username'=>$username]);
    }
}
