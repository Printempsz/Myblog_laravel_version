<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function list(){
        $articles = \App\Article::latest()->paginate(5);
        return view('index',['articles' => $articles]);
    }
}
