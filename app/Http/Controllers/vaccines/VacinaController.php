<?php

namespace App\Http\Controllers\vaccines;

use App\Http\Controllers\Controller;
use App\Http\Requests\vacina\VacinaCreateRequest;
use App\Http\Requests\vacina\VacinaUpdateRequest;
use App\Models\Vacina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VacinaController extends Controller
{
    public function index(){
        return view('usuario.vacinas',[
            "vacinas" => Vacina::all()
        ]);
    }

    public function store(VacinaCreateRequest $request){
        $vacina = Vacina::create($request->all());
        Log::channel('vaccines')->info('O usuário de CPF: '.auth()->user()->cpf.' e email: '.auth()->user()->email.' registrou a vacina de ID: '. $vacina->id);
        return redirect()->route('vaccines.available')->with('message','Vacina registrada com sucesso');
    }

    public function update(VacinaUpdateRequest $request){
        Vacina::find($request->vacina_id)->update([
            'nome' => $request->e_nome,
            'laboratorio' => $request->e_laboratorio,
            'descricao' => $request->e_descricao,
            'idade_minima' => $request->e_idade_minima
        ]);
        Log::channel('vaccines')->info('O usuário de CPF: '.auth()->user()->cpf.' e email: '.auth()->user()->email.' atualizou a vacina de ID: '. request('vacina_id'));
        return redirect()->route('vaccines.available')->with('message','Vacina alterada com sucesso');
    }

    public function delete(Request $request){
        $vacina = Vacina::find($request->delete_vacina_id);

        if($vacina->lotes()->count() > 0)
            return back()->with('errors','Não foi possível excluir a vacina pois há lotes atrelados a ela');

        Log::channel('vaccines')->info('O usuário de CPF: '.auth()->user()->cpf.' e email: '.auth()->user()->email.' deletou a vacina de ID: '. $vacina->id);
        $vacina->delete(); 
        return redirect()->route('vaccines.available')->with('message','Vacina excluida com sucesso');
    }
}
