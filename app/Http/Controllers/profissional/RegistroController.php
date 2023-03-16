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
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;

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

        //CONSUMINDO API 
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

        /* relacionado a eventos */
        UserVaccinated::dispatchIf($registrated, $lote);

        Log::channel('registros')->info('O profissional de CPF '.auth()->user()->cpf.' vacinou o usuário de CPF '. $imunizado->cpf . ' com a vacina ' . $lote->vacina);

        return redirect()->route('professional.apply.vacination')->with('message', 'Registro de vacinação salvo com sucesso');
    }

    public function generatePDF(Registro $registro){
        /* GERANDO PDF / BIBLIOTECA BAIXADA COM O COMPOSER */
        $pdf = Pdf::loadView('usuario.PDF.generatePDF',[
            'registro' => $registro
        ]);
        return $pdf->stream();
        /* return back(); */
    }
}
