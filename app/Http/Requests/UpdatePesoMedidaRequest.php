<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePesoMedidaRequest extends FormRequest
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
'peso' => ['required'], 
'imagem' => ['required'], 
'usuario_id' => ['required'], 
'quadril' => ['required'], 
'cintura' => ['required'], 
'torax' => ['required'], 
'braco_direito' => ['required'], 
'braco_esquerdo' => ['required'], 
'abdomen' => ['required'], 
'coxas' => ['required'], 
'panturilha' => ['required'], ];

    }

    public function messages()
    {
        return [
'peso.required' => 'O campo é Peso obrigatório', 
'imagem.required' => 'O campo é Imagem obrigatório', 
'usuario_id.required' => 'O campo é Usuario_id obrigatório', 
'quadril.required' => 'O campo é Quadril obrigatório', 
'cintura.required' => 'O campo é Cintura obrigatório', 
'torax.required' => 'O campo é Torax obrigatório', 
'braco_direito.required' => 'O campo é Braco_direito obrigatório', 
'braco_esquerdo.required' => 'O campo é Braco_esquerdo obrigatório', 
'abdomen.required' => 'O campo é Abdomen obrigatório', 
'coxas.required' => 'O campo é Coxas obrigatório', 
'panturilha.required' => 'O campo é Panturilha obrigatório', ];

    }
}
