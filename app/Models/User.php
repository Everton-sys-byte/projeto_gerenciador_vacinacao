<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'nome_completo',
        'cns',
        'cpf',
        'celular',
        'data_nascimento',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    } 

    public function endereco(){
        return $this->hasOne(Endereco::class);
    }

    public function registros(){
        return $this->hasMany(Registro::class);
    }

    public function hasRole($rolename){
        foreach($this->roles()->get() as $role)
        {
            if($role->tipo == $rolename)
                return true;
        }
        return false;
    }

    public function getDataNascimento(){
        $data_formatada = \Carbon\Carbon::parse($this->data_nascimento)->format('d/m/Y');
        return $data_formatada;
    }
}
