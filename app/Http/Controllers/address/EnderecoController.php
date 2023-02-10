<?php

namespace App\Http\Controllers\address;

use App\Http\Controllers\Controller;
use App\Models\Cep;
use App\Models\Endereco;
use Illuminate\Http\Request;


class EnderecoController extends Controller
{
    public function store(Request $request)
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

        $authUser = auth()->user();
        
        if($authUser->endereco){
            $endereco = $authUser->endereco;
            $endereco->numero = request('numero');
            $endereco->complemento = request('complemento');
        }
        else{
            $endereco = new Endereco($request->all());
            $endereco->user()->associate($authUser);
        }

        $endereco->cep()->associate($cep);
        $endereco->save(); 
        return redirect()->route('user.configuration.address')->with('message', 'Endereco atualizado com sucesso');
    }
}
