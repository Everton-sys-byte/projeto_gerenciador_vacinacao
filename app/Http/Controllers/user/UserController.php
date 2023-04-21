<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\PasswordUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(UserUpdateRequest $request){

        if($request->hasFile('avatar')){
            $avatar = $request->avatar;
            $fileName = time(). '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('images/avatar'), $fileName);
            auth()->user()->update([
                'avatar' => isset($fileName) ? $fileName : "defaultAvatar.png",
            ]);
        };

        auth()->user()->update([
            'nome_completo' => $request->nome_completo,
            'email' => $request->email,
            'celular' => $request->celular,
            'data_nascimento' => $request->data_nascimento
        ]);

        return redirect()->route('user.configuration.profile')->with('message', 'Perfil atualizado com sucesso');
    }

    public function updatePassword(PasswordUpdateRequest $request){
        $user = auth()->user();
        $user->password = bcrypt(request('novaSenha'));
        $user->save();
        return redirect()->back()->with('message', 'Senha atualizada com sucesso');
    }

    public function logout(){
        session()->forget('role');
        Auth::logout();
        return redirect()->route('logar');
    }
}
