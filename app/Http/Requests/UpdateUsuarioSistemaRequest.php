<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUsuarioSistemaRequest extends FormRequest
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
'nome' => ['required'], 
'email' => ['required'], 
'senha' => ['required'], 
'status' => ['required'], 
'cliente_id' => ['required'], ];

    }

    public function messages()
    {
        return [
'nome.required' => 'O campo é Nome obrigatório', 
'email.required' => 'O campo é Email obrigatório', 
'senha.required' => 'O campo é Senha obrigatório', 
'status.required' => 'O campo é Status obrigatório', 
'cliente_id.required' => 'O campo é Cliente_id obrigatório', ];

    }
}
