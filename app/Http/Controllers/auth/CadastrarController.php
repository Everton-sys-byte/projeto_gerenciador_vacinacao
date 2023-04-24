<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\UserCreateRequest;
use Illuminate\Support\Facades\Log;
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

        Log::channel('create_account')->info('O usuário de email: '.$user->email.' efetuou cadastro no sistema');
        return back()->with('message','Conta cadastrada com sucesso.');
    }
}
