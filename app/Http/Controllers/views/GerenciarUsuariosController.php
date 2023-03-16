<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use App\Models\User;

class GerenciarUsuariosController extends Controller
{
    public function view()
    {
        return view('admin.gerenciarUsuarios',[
            'users' => User::all()
        ]);
    }
}
