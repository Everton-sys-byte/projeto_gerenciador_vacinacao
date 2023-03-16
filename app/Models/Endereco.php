<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'complemento'
    ];
    
  /*   belongsTo é 
    usado para definir um relacionamento de pertencimento de um model. 
    Ele indica que o model atual pertence a outro model. */
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cep(){
        return $this->belongsTo(Cep::class);
    }
}
