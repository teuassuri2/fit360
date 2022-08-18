<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UsuarioResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
'id' => $this->id,
'nome' => $this->nome,
'cidade' => $this->cidade,
'email' => $this->email,
'senha' => $this->senha,
'telefone' => $this->telefone,
'peso_atual' => $this->peso_atual,
'peso_desejado' => $this->peso_desejado,
'imagem' => $this->imagem,
'imagem_perfil' => $this->imagem_perfil,
'sexo' => $this->sexo,
'data_nascimento' => $this->data_nascimento,
'cliente_id' => $this->cliente_id,
'token_id' => $this->token_id,
'envio_whtasapp' => $this->envio_whtasapp,];

    }
}

