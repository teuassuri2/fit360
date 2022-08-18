<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateReceitaSubCategoriaRequest extends FormRequest
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
'nome' => ['required'], 
'imagem' => ['required'], 
'receita_categoria_id' => ['required'], ];

    }

    public function messages()
    {
        return [
'nome.required' => 'O campo é Nome obrigatório', 
'imagem.required' => 'O campo é Imagem obrigatório', 
'receita_categoria_id.required' => 'O campo é Receita_categoria_id obrigatório', ];

    }
}
