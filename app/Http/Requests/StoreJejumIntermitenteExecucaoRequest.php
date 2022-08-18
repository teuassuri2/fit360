<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJejumIntermitenteExecucaoRequest extends FormRequest
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
'horas' => ['required'], 
'data_hora_fim' => ['required'], 
'status' => ['required'], 
'peso_inicial' => ['required'], 
'peso_final' => ['required'], ];

    }

    public function messages()
    {
        return [
'usuario_id.required' => 'O campo é Usuario_id obrigatório', 
'horas.required' => 'O campo é Horas obrigatório', 
'data_hora_fim.required' => 'O campo é Data_hora_fim obrigatório', 
'status.required' => 'O campo é Status obrigatório', 
'peso_inicial.required' => 'O campo é Peso_inicial obrigatório', 
'peso_final.required' => 'O campo é Peso_final obrigatório', ];

    }
}
