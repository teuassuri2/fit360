<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
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
'post' => ['required'], 
'imagem' => ['required'], 
'usuario_id' => ['required'], ];

    }

    public function messages()
    {
        return [
'post.required' => 'O campo é Post obrigatório', 
'imagem.required' => 'O campo é Imagem obrigatório', 
'usuario_id.required' => 'O campo é Usuario_id obrigatório', ];

    }
}
