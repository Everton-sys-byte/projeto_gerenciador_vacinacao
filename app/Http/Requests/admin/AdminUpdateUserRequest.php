<?php

namespace App\Http\Requests\admin;

use App\Rules\Birthday;
use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateUserRequest extends FormRequest
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
            'e_nome_completo' => 'required',
            'e_role' => 'required',
            'e_cns' => 'required_if:e_role,=,profissional|nullable|unique:users,cns,'.request()->get('id'),
            'e_celular' => 'required',
            'e_data_nascimento' => ['required', 'date', new Birthday],
            'e_status' => 'required'
        ];
    }
}
