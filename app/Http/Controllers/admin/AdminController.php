<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AdminCreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createUser(AdminCreateUserRequest $request){
        $user = User::create([
            'nome_completo' => request("nome_completo"),
            'cpf' => request("cpf"),
            'email' => request("email"),
            'cns' => request("cns"),
            'celular' => request("celular"),
            'data_nascimento' => request("data_nascimento"),
            'password' => bcrypt(request('password'))
        ]);

        $user->roles()->attach(1);
        if(request('role') == 'profissional')
            $user->roles()->attach(2);

        return redirect()->route('admin.manage.users')->with('success','Usuário criado com sucesso');
    }

    public function editUser(Request $request){
        return $request;
    }
}
