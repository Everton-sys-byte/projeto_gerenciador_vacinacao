<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\UserLogarRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AutenticarController extends Controller
{
    public function autenticar(UserLogarRequest $request, User $user){
        $hasPermission = false; 

        Auth::attempt(['email' => $request->email, 'password' => $request->password],false);

        if(Auth::check()) {
            $user = auth()->user();
            foreach($user->roles()->get() as $role);
                $request->roles == $role->id ? $hasPermission = true : $hasPermission = false;
            
            if(!$hasPermission)
            {
                Auth::logout();
                return redirect()->route('logar')->with('permission','Você não tem a permissão necessária para efetuar login com este tipo de usuário.');    
            }
                

            if($request->roles == 1)
                return redirect()->route('user.home');
            else if ($request->roles == 2)
                return redirect()->route('profissional.home');
            else if( $request->roles == 3)
                return redirect()->route('admin.home');
        }
        
        return redirect()->route('logar')->with('credentials','Usuario ou senha inválidos.');
    }

}
