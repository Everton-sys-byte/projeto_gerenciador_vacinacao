<?php

namespace App\Http\Requests\user;

use App\Rules\PasswordCheck;
use Illuminate\Foundation\Http\FormRequest;

class PasswordUpdateRequest extends FormRequest
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
            'senhaAtual' => ['required', new PasswordCheck()],
            'novaSenha' => 'required',
            'repetir_novaSenha' => 'required|same:novaSenha'
        ];
    }
}
