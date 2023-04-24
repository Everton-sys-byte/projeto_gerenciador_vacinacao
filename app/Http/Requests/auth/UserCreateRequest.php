<?php

namespace App\Http\Requests\auth;

use App\Rules\Birthday;
use App\Rules\NomeCompleto;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome_completo' => ['required', new NomeCompleto],
            'cpf' => 'required|unique:users|size:14',
            'email' => 'required|email|unique:users',
            'celular' => 'required|',
            'data_nascimento'=> ['required','date', new Birthday],
            'password' => 'required|',
            'c_password' => 'required|same:password',
        ];
    }
}
