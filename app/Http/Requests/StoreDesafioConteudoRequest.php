<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDesafioConteudoRequest extends FormRequest
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
'desafio_id' => ['required'], 
'dia' => ['required'], 
'hora' => ['required'], 
'titulo' => ['required'], 
'texto' => ['required'], 
'imagem' => ['required'], 
'video' => ['required'], 
'ordem' => ['required'], 
'vimeo' => ['required'], ];

    }

    public function messages()
    {
        return [
'desafio_id.required' => 'O campo é Desafio_id obrigatório', 
'dia.required' => 'O campo é Dia obrigatório', 
'hora.required' => 'O campo é Hora obrigatório', 
'titulo.required' => 'O campo é Titulo obrigatório', 
'texto.required' => 'O campo é Texto obrigatório', 
'imagem.required' => 'O campo é Imagem obrigatório', 
'video.required' => 'O campo é Video obrigatório', 
'ordem.required' => 'O campo é Ordem obrigatório', 
'vimeo.required' => 'O campo é Vimeo obrigatório', ];

    }
}
