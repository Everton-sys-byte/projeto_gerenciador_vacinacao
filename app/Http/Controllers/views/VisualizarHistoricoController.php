<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use App\Models\Profissional;
use App\Models\Registro;

class VisualizarHistoricoController extends Controller
{
    public function view(){

        $registros = Registro::where('profissional_id', auth()->user()->cns)->with(['imunizado.endereco.cep','lote.vacina'])->get();
        return view('profissional.historicoVacinasAplicadas',[
            'registros' => $registros
        ]);
    }
}
