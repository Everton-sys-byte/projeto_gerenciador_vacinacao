<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use App\Models\Role;

class LoginController extends Controller
{
    public function view(){
        $roles = Role::all();
        return view('authentication.login',[
            'roles' => $roles
        ]);
    }
}
