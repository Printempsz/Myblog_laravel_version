<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function new(Request $request){
        if(Auth::check()) {
            $article = new \App\Article;
            $article->title = $request->title;
            $article->content = $request->input('content');
            $article->user_id = Auth::id();
            $article->save();
            return redirect()->route('index');
        }
        return redirect()->route('sign_in');
    }
    public function comment(Request $request){
        if(Auth::check()) {
            $comment = new \App\Comments;
            $comment->content = $request->input('content');
            $comment->article_id = $request->article_id;
            $comment->user_id = Auth::id();
            $comment->save();
            return redirect()->back();
        }
        return redirect()->route('query',[$request->article_id]);
    }
}
