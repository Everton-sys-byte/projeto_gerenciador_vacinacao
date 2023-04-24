<?php

namespace App\Http\Requests\lote;

use App\Rules\BatchDueDate;
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
            'e_data_vencimento' => ['required','date', new BatchDueDate]
        ];
    }

    public function messages()
    {
        return [
            'e_codigo.required' => 'O campo codigo deve ser obrigatorio.',
            'e_codigo.unique' => 'O código já foi usado.',
            'e_quantidade.required' => 'O campo quantidade é obrigatorio.',
            'e_quantidade.integer' => 'O campo quantiade deve ser inteiro.',
            'e_data_vencimento.required' => 'O campo data de vencimento é obrigatório.',
            'e_data_vencimento.date' => 'O campo data de vencimento deve ser do tipo data' 
        ];
    }
}
