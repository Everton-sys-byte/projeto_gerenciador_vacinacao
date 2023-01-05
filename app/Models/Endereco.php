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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cep(){
        return $this->hasOne(Cep::class);
    }
}
