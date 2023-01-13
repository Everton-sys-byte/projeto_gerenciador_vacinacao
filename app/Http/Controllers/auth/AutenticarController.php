<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\UserLogarRequest;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;


class AutenticarController extends Controller
{
    public function autenticar(UserLogarRequest $request, User $user){

        Auth::attempt(['email' => $request->email, 'password' => $request->password], false);

        if(Auth::check()) {
            $user = auth()->user();

            if(!$user->hasRole($request->role))
            {
                Auth::logout();
                return redirect()->route('logar')->with('permission','Você não tem a permissão necessária para efetuar login com este tipo de usuário.');    
            }
                
            $request->session()->put('role', $request->role);
            return redirect()->route('user.home');
        }
        
        return redirect()->route('logar')->with('credentials','Usuario ou senha inválidos.');
    }

}
