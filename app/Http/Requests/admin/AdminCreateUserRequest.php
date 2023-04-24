<?php

namespace App\Http\Requests\admin;

use App\Rules\Birthday;
use App\Rules\NomeCompleto;
use Illuminate\Foundation\Http\FormRequest;

class AdminCreateUserRequest extends FormRequest
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
            'cpf' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'role' => 'required',
            'cns' => 'required_if:role,=,profissional|nullable|unique:users',
            'celular' => 'required',
            'data_nascimento' => ['required', 'date', new Birthday],
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'role' => 'o campo tipo de usuário é obrigatório.',
        ];
    }
}
