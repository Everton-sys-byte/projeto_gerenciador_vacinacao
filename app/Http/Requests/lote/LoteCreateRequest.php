<?php

namespace App\Http\Requests\lote;

use Illuminate\Foundation\Http\FormRequest;

class LoteCreateRequest extends FormRequest
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
            'codigo' => 'required|unique:lotes',
            'tecnologia' => 'required',
            'quantidade' => 'required|integer',
            'data_vencimento' => 'required|date'
        ];
    }
}
