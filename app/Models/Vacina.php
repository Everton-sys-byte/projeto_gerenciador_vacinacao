<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'laboratorio',
        'descricao',
        'idade_minima'
    ];

    public function lotes(){
        return $this->hasMany(Lote::class);
    }
}
