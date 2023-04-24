<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'avatar' => 'image|mimes:jpeg,png,jpg',
            'nome_completo' => 'required|',
            /* 'cpf' => 'required|unique:users|size:14', */
            'email' => 'required|email|unique:users,email,'. auth()->user()->id,
            'celular' => 'required|',
            'data_nascimento'=>'required|date',
            /* 'password' => 'required|',
            'c_password' => 'required|same:password', */
        ];
    }
}
