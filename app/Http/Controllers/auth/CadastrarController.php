<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;

class CadastrarController extends Controller
{
    public function store(UserCreateRequest $request, User $user){
        $user->create($request->all());
    }
}
