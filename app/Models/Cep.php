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

    public function enderecos(){
        return $this->hasMany(Endereco::class);
    }
}
