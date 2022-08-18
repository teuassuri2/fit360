<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class JejumIntermitenteProgramacaoResource extends ResourceCollection
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
'jejum_intermitente_id' => $this->jejum_intermitente_id,
'hora_inicio' => $this->hora_inicio,
'hora_fim' => $this->hora_fim,
'total' => $this->total,
'dia' => $this->dia,];

    }
}

