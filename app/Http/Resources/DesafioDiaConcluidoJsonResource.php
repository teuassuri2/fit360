<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DesafioDiaConcluidoResource extends ResourceCollection
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
'desafio_id' => $this->desafio_id,
'dia' => $this->dia,
'nota' => $this->nota,
'peso' => $this->peso,];

    }
}

