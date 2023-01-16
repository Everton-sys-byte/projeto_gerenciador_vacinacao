<?php

namespace App\Http\Controllers\address;

use App\Http\Controllers\Controller;
use App\Models\Cep;
use App\Models\Endereco;
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

        /* $endereco = new Endereco([
            'numero' => request('numero'),
            'complemento' => request('complemento')
        ]); */

        $endereco = Endereco::where('user_id', auth()->id())->get();

        if ($endereco)
            $cep->enderecos()->create([
                'numero' => request('numero'),
                'complemento' => request('complemento')
            ]);


        return $cep->enderecos()->get();
        return redirect() - route('user.configuration.address');
    }
}
