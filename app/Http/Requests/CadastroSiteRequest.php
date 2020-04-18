<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroSiteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "nome" => "nullable",
            "email" => "required|email",
            "telefone" => "nullable",
            "cep" => "required|string",
            "rua" => "nullable",
            "numero" => "nullable",
            "bairro" => "nullable",
            "cidade" => "nullable",
            "uf" => "nullable",
        ];
    }
}
