<?php

namespace App\Http\Requests\registro;

use App\Rules\UserExist;
use Illuminate\Foundation\Http\FormRequest;

class RegistroCreateRequest extends FormRequest
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
            'cpf' => ['required', new UserExist()],
            'vacina' => 'required',
            'lote' => 'required',
            'data_vacinacao' => 'required',
            'CNES' => 'required',
        ];
    }
}
