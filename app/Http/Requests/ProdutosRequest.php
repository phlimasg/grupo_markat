<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
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
            'nome' => 'required|string|max:191',
            'descricao' => 'required|string',
            'valor' => 'required|string|max:191',
            'uni_medida' => 'required|string|max:191',
            'quantidade' => 'required|numeric'
        ];
    }
}
