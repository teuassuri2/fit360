<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJejumIntermitenteRequest extends FormRequest
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
'vimeo' => ['required'], 
'imagem' => ['required'], ];

    }

    public function messages()
    {
        return [
'titulo.required' => 'O campo é Titulo obrigatório', 
'texto.required' => 'O campo é Texto obrigatório', 
'vimeo.required' => 'O campo é Vimeo obrigatório', 
'imagem.required' => 'O campo é Imagem obrigatório', ];

    }
}
