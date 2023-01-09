<?php

namespace App\Http\Controllers\package;

use App\Http\Controllers\Controller;
use App\Models\Vacina;

class LoteController extends Controller
{
    public function view(Vacina $vacina) {

        $lotes = $vacina->lotes()->get();

        return view('profissional.lotes',[
            'lotes' => $lotes
        ]);
    }
}
