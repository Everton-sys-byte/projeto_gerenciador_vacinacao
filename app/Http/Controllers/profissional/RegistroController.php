<?php

namespace App\Http\Controllers\profissional;

use App\Events\UserVaccinated;
use App\Http\Controllers\Controller;
use App\Http\Requests\registro\RegistroCreateRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use App\Models\Registro;
use App\Models\User;
use App\Models\Lote;

class RegistroController extends Controller
{
    public function view()
    {
        $registros = auth()->user()->registros()->with(['lote.vacina', 'profissional'])->get();
        return view('usuario.carteirinha', [
            'registros' => $registros
        ]);
    }

    public function moreInformation(Registro $registro)
    {
        $registro = Registro::where('uuid', $registro->uuid)->with(['profissional', 'lote.vacina'])->first();
        $response = Http::get('https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/' . $registro->CNES)->json();
        $enderecoEstabelecimento = null;

        !Arr::has($response, 'message') ? $enderecoEstabelecimento = $response : "";
        return view('usuario.maisInformacaoRegistro', [
            'registro' => $registro,
            'enderecoEstabelecimento' => $enderecoEstabelecimento
        ]);
    }

    public function store(RegistroCreateRequest $request)
    {
        //achando que vai ser o imunizado
        $imunizado = User::where('cpf', request('cpf'))->first();

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
        $registrated = $registro->save();

        UserVaccinated::dispatchIf($registrated, $lote);

        return redirect()->route('professional.apply.vacination')->with('message', 'Registro de vacinação salvo com sucesso');
    }
}
