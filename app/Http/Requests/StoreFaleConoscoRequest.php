<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFaleConoscoRequest extends FormRequest
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
'usuario_id' => ['required'], 
'opcao' => ['required'], 
'texto' => ['required'], 
'data_consulta' => ['required'], 
'nota' => ['required'], 
'desafio_id' => ['required'], 
'status' => ['required'], ];

    }

    public function messages()
    {
        return [
'usuario_id.required' => 'O campo é Usuario_id obrigatório', 
'opcao.required' => 'O campo é Opcao obrigatório', 
'texto.required' => 'O campo é Texto obrigatório', 
'data_consulta.required' => 'O campo é Data_consulta obrigatório', 
'nota.required' => 'O campo é Nota obrigatório', 
'desafio_id.required' => 'O campo é Desafio_id obrigatório', 
'status.required' => 'O campo é Status obrigatório', ];

    }
}
