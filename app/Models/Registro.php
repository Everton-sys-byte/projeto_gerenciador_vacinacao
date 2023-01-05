<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_vacinacao',
        'CNES'
    ];

    public function imunizado(){
        return $this->belongsTo(User::class,'user_id','imunizado_id');
    }

    public function profissional(){
        return $this->belongsTo(User::class,'user_id','profissional_id');
    }

    public function lote(){
        return $this->hasOne(Lote::class);
    }
}
