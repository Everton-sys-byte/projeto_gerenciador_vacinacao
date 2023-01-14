<?php

namespace App\Http\Controllers\address;

use App\Http\Controllers\Controller;
use App\Models\Cep;
use Illuminate\Http\Request;


class EnderecoController extends Controller
{
    public function create(Request $request)
    {
        $cep = Cep::firstOrCreate(
            ['cep' => request('cep')],
            [
                'uf' => request('uf'),
                'cidade' => request('cidade'),
                'bairro' => request('bairro'),
                'logradouro' => request('logradouro')
            ]
        );

        /* if($cep)
            $endereco = $cep->enderecos->create([
                'numero' => request('numero'),
                'complemento' => request('complemento')
            ]); */
            return $cep;
    }
}
