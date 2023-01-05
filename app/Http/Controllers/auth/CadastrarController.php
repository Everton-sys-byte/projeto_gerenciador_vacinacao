<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;

class CadastrarController extends Controller
{
    public function store(UserCreateRequest $request, User $user){
        
        $request['password'] = bcrypt($request->password);
        $user = $user->create($request->all());

        if(!$request->has('role'))
            $user->roles()->attach(1);
        else
            $user->roles()->attach($request->role);

        return back()->with('message','Sucesso');
    }
}
