<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AdminCreateUserRequest;
use App\Http\Requests\admin\AdminUpdateUserRequest;
use App\Models\User;

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

    public function editUser(AdminUpdateUserRequest $request){

        $user = User::find($request->id);

        $user->update([
            'nome_completo' => request("e_nome_completo"),
            'cpf' => request("e_cpf"),
            'data_nascimento' => request("e_data_nascimento"),
            'celular' => request('e_celular'),
            'status' => request('e_status'),
            'cns' => request('e_cns')
        ]);

        if(!$user->hasRole('profissional') && request('e_role') == 'profissional')
            $user->roles()->attach(2);
        else if($user->hasRole('profissional') && request('e_role') == 'comum' ) {
            $user->roles()->detach(2);
            $user->update([
                'cns' => null
            ]);
        }
    

        return redirect()->route('admin.manage.users')->with('success','Usuário atualizado com sucesso');
    }
}
