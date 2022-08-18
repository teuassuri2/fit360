<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUsuarioRequest extends FormRequest
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
'cidade' => ['required'], 
'email' => ['required'], 
'senha' => ['required'], 
'telefone' => ['required'], 
'peso_atual' => ['required'], 
'peso_desejado' => ['required'], 
'imagem' => ['required'], 
'imagem_perfil' => ['required'], 
'sexo' => ['required'], 
'data_nascimento' => ['required'], 
'cliente_id' => ['required'], 
'token_id' => ['required'], 
'envio_whtasapp' => ['required'], ];

    }

    public function messages()
    {
        return [
'nome.required' => 'O campo é Nome obrigatório', 
'cidade.required' => 'O campo é Cidade obrigatório', 
'email.required' => 'O campo é Email obrigatório', 
'senha.required' => 'O campo é Senha obrigatório', 
'telefone.required' => 'O campo é Telefone obrigatório', 
'peso_atual.required' => 'O campo é Peso_atual obrigatório', 
'peso_desejado.required' => 'O campo é Peso_desejado obrigatório', 
'imagem.required' => 'O campo é Imagem obrigatório', 
'imagem_perfil.required' => 'O campo é Imagem_perfil obrigatório', 
'sexo.required' => 'O campo é Sexo obrigatório', 
'data_nascimento.required' => 'O campo é Data_nascimento obrigatório', 
'cliente_id.required' => 'O campo é Cliente_id obrigatório', 
'token_id.required' => 'O campo é Token_id obrigatório', 
'envio_whtasapp.required' => 'O campo é Envio_whtasapp obrigatório', ];

    }
}
