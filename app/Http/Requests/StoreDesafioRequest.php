<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDesafioRequest extends FormRequest
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
'texto' => ['required'], 
'video' => ['required'], 
'imagem' => ['required'], 
'valor_inicial' => ['required'], 
'valor_final' => ['required'], 
'dias' => ['required'], 
'pago' => ['required'], 
'cliente_id' => ['required'], 
'vimeo' => ['required'], 
'ordem' => ['required'], 
'dia_solicitacao_peso' => ['required'], 
'status' => ['required'], 
'valor_final_dia' => ['required'], 
'texto_site' => ['required'], 
'desafio' => ['required'], 
'desafio_tipo_id' => ['required'], 
'professor' => ['required'], ];

    }

    public function messages()
    {
        return [
'nome.required' => 'O campo é Nome obrigatório', 
'texto.required' => 'O campo é Texto obrigatório', 
'video.required' => 'O campo é Video obrigatório', 
'imagem.required' => 'O campo é Imagem obrigatório', 
'valor_inicial.required' => 'O campo é Valor_inicial obrigatório', 
'valor_final.required' => 'O campo é Valor_final obrigatório', 
'dias.required' => 'O campo é Dias obrigatório', 
'pago.required' => 'O campo é Pago obrigatório', 
'cliente_id.required' => 'O campo é Cliente_id obrigatório', 
'vimeo.required' => 'O campo é Vimeo obrigatório', 
'ordem.required' => 'O campo é Ordem obrigatório', 
'dia_solicitacao_peso.required' => 'O campo é Dia_solicitacao_peso obrigatório', 
'status.required' => 'O campo é Status obrigatório', 
'valor_final_dia.required' => 'O campo é Valor_final_dia obrigatório', 
'texto_site.required' => 'O campo é Texto_site obrigatório', 
'desafio.required' => 'O campo é Desafio obrigatório', 
'desafio_tipo_id.required' => 'O campo é Desafio_tipo_id obrigatório', 
'professor.required' => 'O campo é Professor obrigatório', ];

    }
}
