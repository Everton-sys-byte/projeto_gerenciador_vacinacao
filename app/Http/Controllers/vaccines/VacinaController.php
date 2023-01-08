<?php

namespace App\Http\Controllers\vaccines;

use App\Http\Controllers\Controller;
use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
    public function view(){
        return view('usuario.vacinas',[
            "vacinas" => Vacina::all()
        ]);
    }
}
