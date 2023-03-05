<?php

namespace App\Http\Controllers\batchs;

use App\Http\Controllers\Controller;
use App\Http\Requests\lote\LoteCreateRequest;
use App\Http\Requests\lote\LoteUpdateRequest;
use App\Models\Vacina;
use App\Models\Lote;
use Illuminate\Http\Request;

class LoteController extends Controller
{
   public function store(Vacina $vacina, LoteCreateRequest $request)
   {
      $vacina->lotes()->create($request->all());
      return redirect()->back()->with('message', 'Lote cadastrado com sucesso');
   }

   public function update(LoteUpdateRequest $request)
   {
      Lote::find($request->lote_id)->update([
         'codigo' => request('e_codigo'),
         'tecnologia' => request('e_tecnologia'),
         'quantidade' => request('e_quantidade'),
         'data_vencimento' => request('e_data_vencimento')
      ]);
      return redirect()->back()->with('message', 'Lote alterado com sucesso');
   }

   public function delete(Request $request){
      $lote = Lote::find($request->delete_lote_id);

      if($lote->registros()->count() > 0)
         return back()->with('errors', 'Lote possui registros atrelados a ele');

      $lote->delete();   
      return redirect()->back()->with('message', 'Lote excluido com sucesso');
   }
}
