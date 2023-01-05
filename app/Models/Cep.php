<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'uf',
        'cidade',
        'bairro',
        'logradouro'
    ];

    public function endereco(){
        return $this->belongsTo(Endereco::class);
    }
}
