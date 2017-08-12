<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt([
            'username'          => $request->username,
            'password'          => $request->password
        ])){
            return redirect()->route('index');
        }
        $request->flash();
            return redirect()->route('sign_in')->with('message-error','密码错误');
        }
}