<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use App\Models\Vacina;
use App\Models\Lote;

class AplicarVacinacaoController extends Controller
{
    public function view(){
        $vacinas = Vacina::all();
        $lotes = Lote::where('quantidade','>',0)->get();

        return view('profissional.aplicarVacinacao',[
            'vacinas' => $vacinas,
            'lotes' => $lotes
        ]);
    }
}
