<?php

namespace App\Http\Controllers\batchs;

use App\Http\Controllers\Controller;
use App\Http\Requests\lote\LoteCreateRequest;
use App\Http\Requests\lote\LoteUpdateRequest;
use App\Models\Vacina;
use App\Models\Lote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoteController extends Controller
{
   public function store(Vacina $vacina, LoteCreateRequest $request)
   {
      $lote = $vacina->lotes()->create($request->all());
      Log::channel('batches')->info('O usuário de CPF: '.auth()->user()->cpf.' e email: '.auth()->user()->email.' registrou o lote de ID: '. $lote->id);
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

      Log::channel('batches')->info('O usuário de CPF: '.auth()->user()->cpf.' e email: '.auth()->user()->email.' atualizou o lote de ID: '. request('lote_id'));
      return redirect()->back()->with('message', 'Lote alterado com sucesso');
   }

   public function delete(Request $request){
      $lote = Lote::find($request->delete_lote_id);

      if($lote->registros()->count() > 0)
         return back()->with('errors', 'Lote possui registros atrelados a ele');

      Log::channel('batches')->info('O usuário de CPF: '.auth()->user()->cpf.' e email: '.auth()->user()->email.' deletou o lote de ID: '. $lote->id);
      $lote->delete();   
      return redirect()->back()->with('message', 'Lote excluido com sucesso');
   }
}
