<?php

namespace App\Http\Controllers\vaccines;

use App\Http\Controllers\Controller;
use App\Http\Requests\vacina\VacinaCreateRequest;
use App\Http\Requests\vacina\VacinaUpdateRequest;
use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
    public function view(){
        return view('usuario.vacinas',[
            "vacinas" => Vacina::all()
        ]);
    }

    public function create(VacinaCreateRequest $request){
        Vacina::create($request->all());
        return redirect()->route('vaccines.available')->with('message','Vacina registrada com sucesso');
    }

    public function update(VacinaUpdateRequest $request){
        Vacina::find($request->vacina_id)->update([
            'nome' => $request->e_nome,
            'laboratorio' => $request->e_laboratorio,
            'descricao' => $request->e_descricao,
            'idade_minima' => $request->e_idade_minima
        ]);

        return redirect()->route('vaccines.available')->with('message','Vacina alterada com sucesso');
    }

    public function delete(Request $request){
        $vacina = Vacina::find($request->delete_vacina_id);

        if($vacina->lotes()->count() > 0)
            return back()->with('errors','Não foi possível excluir a vacina pois há lotes atrelados a ela');

        $vacina->delete(); 
        return redirect()->route('vaccines.available')->with('message','Vacina excluida com sucesso');
    }
}
