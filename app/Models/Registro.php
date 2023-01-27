<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'data_vacinacao',
        'CNES'
    ];

    public function imunizado(){
        return $this->belongsTo(User::class,'imunizado_id', 'id');
    }

    public function profissional(){
        return $this->belongsTo(User::class,'profissional_id', 'cns');
    }

    public function lote(){
        return $this->belongsTo(Lote::class);
    }
}
