<?php

namespace App\Http\Controllers\profissional;

use App\Http\Controllers\Controller;
use App\Http\Requests\registro\RegistroCreateRequest;
use App\Models\Registro;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lote;

class RegistroController extends Controller
{
    public function store(RegistroCreateRequest $request)
    {
        //achando que vai ser o imunizado
        $imunizado = User::where('cpf',request('cpf'))->first();

        if(!$imunizado)
            return redirect()->route('professional.apply.vacination')->with('errors','');
        //achando o lote
        $lote = Lote::find(request('lote'));

        //criando o objeto do tipo registro e preenchendo CNES e data de vacinação
        $registro = new Registro($request->all());
        //associando o lote ao registro
        $registro->lote()->associate($lote);
        //associando o imunizado ao registro
        $registro->imunizado()->associate($imunizado);
        //associando o profissional que fez a aplicação ao registro
        $registro->profissional()->associate(auth()->user());

        //salvando o registro no banco de dados
        $registro->save();

        return redirect()->route('professional.apply.vacination')->with('message', 'Registro de vacinação salvo com sucesso');
    }
}
