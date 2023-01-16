<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AdminCreateUserRequest;
use App\Models\User;

class AdminController extends Controller
{
    public function createUser(AdminCreateUserRequest $request){
        User::create($request->all());
    }
}
