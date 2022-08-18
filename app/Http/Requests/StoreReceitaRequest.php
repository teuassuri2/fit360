<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreReceitaRequest extends FormRequest
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
'titulo' => ['required'], 
'ingredientes' => ['required'], 
'preparo' => ['required'], 
'obs' => ['required'], 
'receita_sub_categoria_id' => ['required'], ];

    }

    public function messages()
    {
        return [
'titulo.required' => 'O campo é Titulo obrigatório', 
'ingredientes.required' => 'O campo é Ingredientes obrigatório', 
'preparo.required' => 'O campo é Preparo obrigatório', 
'obs.required' => 'O campo é Obs obrigatório', 
'receita_sub_categoria_id.required' => 'O campo é Receita_sub_categoria_id obrigatório', ];

    }
}
