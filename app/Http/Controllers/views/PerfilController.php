<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use App\Models\User;

class PerfilController extends Controller
{
    public function view(User $user)
    {
        $userInformations = $user->find(auth()->id())->with('endereco')->get([
            "nome_completo",
        ]);
        return view('usuario.perfil', $userInformations);
    }
}
