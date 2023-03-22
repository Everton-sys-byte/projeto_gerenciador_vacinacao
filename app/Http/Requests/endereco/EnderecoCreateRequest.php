<?php

namespace App\Http\Requests\endereco;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoCreateRequest extends FormRequest
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
            'cep' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'logradouro' => 'required',
            'numero' => 'required'
        ];
    }
}
