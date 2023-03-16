<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\UserLogarRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class AutenticarController extends Controller
{
    public function autenticar(UserLogarRequest $request, User $user){

        Auth::attempt(['email' => $request->email, 'password' => $request->password], false);

        if(Auth::check()) {
            $user = auth()->user();

            if(!$user->hasRole($request->role))
            {
                Log::channel('login')->warning('O usuário de email: '.auth()->user()->email.' tentou efetuar login mas não possui permissão de usuário '.request('role'));
                Auth::logout();
                return redirect()->route('logar')->with('permission','Você não tem a permissão necessária para efetuar login com este tipo de usuário.');    
            }
            Log::channel('login')->info('O usuário de email: '.auth()->user()->email.' efetuou login como usuário '.request('role'));

            $request->session()->put('role', $request->role);
            return redirect()->route('user.home');
        }
        Log::channel('login')->warning('O usuário de email: '.request('email').' tentou efetuar login e falhou');
        return redirect()->route('logar')->with('credentials','Usuario ou senha inválidos.');
    }

}
