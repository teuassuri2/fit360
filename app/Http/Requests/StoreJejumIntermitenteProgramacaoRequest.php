<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJejumIntermitenteProgramacaoRequest extends FormRequest
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
'jejum_intermitente_id' => ['required'], 
'hora_inicio' => ['required'], 
'hora_fim' => ['required'], 
'total' => ['required'], 
'dia' => ['required'], ];

    }

    public function messages()
    {
        return [
'jejum_intermitente_id.required' => 'O campo é Jejum_intermitente_id obrigatório', 
'hora_inicio.required' => 'O campo é Hora_inicio obrigatório', 
'hora_fim.required' => 'O campo é Hora_fim obrigatório', 
'total.required' => 'O campo é Total obrigatório', 
'dia.required' => 'O campo é Dia obrigatório', ];

    }
}
