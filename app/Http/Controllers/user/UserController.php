<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request){
        auth()->user()->update($request->all());
    }

    public function Logout(){
        Auth::logout();
        return redirect()->route('logar');
    }
}
