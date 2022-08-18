<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFaqRequest extends FormRequest
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
'texto' => ['required'], 
'cliente_id' => ['required'], 
'desafio_id' => ['required'], 
'usuario_id' => ['required'], 
'status' => ['required'], ];

    }

    public function messages()
    {
        return [
'titulo.required' => 'O campo é Titulo obrigatório', 
'texto.required' => 'O campo é Texto obrigatório', 
'cliente_id.required' => 'O campo é Cliente_id obrigatório', 
'desafio_id.required' => 'O campo é Desafio_id obrigatório', 
'usuario_id.required' => 'O campo é Usuario_id obrigatório', 
'status.required' => 'O campo é Status obrigatório', ];

    }
}
