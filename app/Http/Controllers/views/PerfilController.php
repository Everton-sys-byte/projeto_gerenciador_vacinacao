<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

class PerfilController extends Controller
{
    public function view(User $user)
    {
        $endereco = $user->find(auth()->id())->endereco;
        $cep = $endereco->cep;

        return view('usuario.perfil', [
            'endereco' => $endereco,
            'cep' => $cep
        ]);
    }
}
