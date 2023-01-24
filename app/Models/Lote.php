<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'tecnologia',
        'quantidade',
        'data_vencimento',
        'status'
    ];

    public function registros(){
        return $this->hasMany(Registro::class);
    }

    public function vacina(){
        return $this->belongsTo(Vacina::class);
    }

    public function getDataVencimento(){
        $data_formatada = \Carbon\Carbon::parse($this->data_vencimento)->format('d/m/Y');
        return $data_formatada;
    }
}
