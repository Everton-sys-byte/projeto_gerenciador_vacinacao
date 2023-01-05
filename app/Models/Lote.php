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
}
