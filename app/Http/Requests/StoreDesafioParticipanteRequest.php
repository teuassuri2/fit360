<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDesafioParticipanteRequest extends FormRequest
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
'usuario_id' => ['required'], 
'id_transacao' => ['required'], 
'email_disparado' => ['required'], 
'email_venda' => ['required'], ];

    }

    public function messages()
    {
        return [
'desafio_id.required' => 'O campo é Desafio_id obrigatório', 
'usuario_id.required' => 'O campo é Usuario_id obrigatório', 
'id_transacao.required' => 'O campo é Id_transacao obrigatório', 
'email_disparado.required' => 'O campo é Email_disparado obrigatório', 
'email_venda.required' => 'O campo é Email_venda obrigatório', ];

    }
}
