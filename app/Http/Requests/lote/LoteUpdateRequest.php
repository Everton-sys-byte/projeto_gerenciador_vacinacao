<?php

namespace App\Http\Requests\lote;

use Illuminate\Foundation\Http\FormRequest;

class LoteUpdateRequest extends FormRequest
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
            'e_codigo' => 'required|unique:lotes,codigo,'.request()->get('lote_id'),
            'e_tecnologia' => 'required',
            'e_quantidade' => 'required|integer',
            'e_data_vencimento' => 'required|date'
        ];
    }
}
