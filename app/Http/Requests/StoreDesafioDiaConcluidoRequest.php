<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDesafioDiaConcluidoRequest extends FormRequest
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
'desafio_id' => ['required'], 
'dia' => ['required'], 
'nota' => ['required'], 
'peso' => ['required'], ];

    }

    public function messages()
    {
        return [
'usuario_id.required' => 'O campo é Usuario_id obrigatório', 
'desafio_id.required' => 'O campo é Desafio_id obrigatório', 
'dia.required' => 'O campo é Dia obrigatório', 
'nota.required' => 'O campo é Nota obrigatório', 
'peso.required' => 'O campo é Peso obrigatório', ];

    }
}
