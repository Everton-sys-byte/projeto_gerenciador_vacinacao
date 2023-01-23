<?php

namespace App\Http\Requests\vacina;

use Illuminate\Foundation\Http\FormRequest;

class VacinaCreateRequest extends FormRequest
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
            'nome' => 'required',
            'laboratorio' => 'required',
            'descricao' => 'required',
            'idade_minima' => 'nullable|integer'
        ];
    }
}
