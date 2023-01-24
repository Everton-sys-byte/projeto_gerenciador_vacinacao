<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use App\Models\Vacina;

class LotesController extends Controller
{
    public function view(Vacina $vacina) {

        $lotes = $vacina->lotes()->get();

        return view('profissional.lotes',[
            'lotes' => $lotes
        ]);
    }
}
