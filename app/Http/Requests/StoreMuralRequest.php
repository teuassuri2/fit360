<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMuralRequest extends FormRequest
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
'usuario_sistema_id' => ['required'], 
'link' => ['required'], 
'data' => ['required'], 
'imagem' => ['required'], ];

    }

    public function messages()
    {
        return [
'titulo.required' => 'O campo é Titulo obrigatório', 
'texto.required' => 'O campo é Texto obrigatório', 
'usuario_sistema_id.required' => 'O campo é Usuario_sistema_id obrigatório', 
'link.required' => 'O campo é Link obrigatório', 
'data.required' => 'O campo é Data obrigatório', 
'imagem.required' => 'O campo é Imagem obrigatório', ];

    }
}
