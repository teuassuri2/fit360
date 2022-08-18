<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DesafioParticipanteResource extends ResourceCollection
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
'desafio_id' => $this->desafio_id,
'usuario_id' => $this->usuario_id,
'id_transacao' => $this->id_transacao,
'email_disparado' => $this->email_disparado,
'email_venda' => $this->email_venda,];

    }
}

