<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class JejumIntermitenteExecucaoResource extends ResourceCollection
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
'usuario_id' => $this->usuario_id,
'horas' => $this->horas,
'data_hora_fim' => $this->data_hora_fim,
'status' => $this->status,
'peso_inicial' => $this->peso_inicial,
'peso_final' => $this->peso_final,];

    }
}

