<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTokenRequest extends FormRequest
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
'cliente_id' => ['required'], 
'registro_Id' => ['required'], 
'plataforma' => ['required'], 
'device' => ['required'], 
'model' => ['required'], 
'platform' => ['required'], 
'uuid' => ['required'], 
'version' => ['required'], ];

    }

    public function messages()
    {
        return [
'cliente_id.required' => 'O campo é Cliente_id obrigatório', 
'registro_Id.required' => 'O campo é Registro_Id obrigatório', 
'plataforma.required' => 'O campo é Plataforma obrigatório', 
'device.required' => 'O campo é Device obrigatório', 
'model.required' => 'O campo é Model obrigatório', 
'platform.required' => 'O campo é Platform obrigatório', 
'uuid.required' => 'O campo é Uuid obrigatório', 
'version.required' => 'O campo é Version obrigatório', ];

    }
}
