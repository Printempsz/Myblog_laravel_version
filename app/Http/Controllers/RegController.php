<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function reg(Request $request){
        $user = new \App\User;
        $user->username     = $request->username;
        $user->password     =bcrypt($request->password);
        $user->save();
        return redirect()->route('sign_in');
    }
}
