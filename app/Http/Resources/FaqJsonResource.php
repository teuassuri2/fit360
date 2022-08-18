<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FaqResource extends ResourceCollection
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
'titulo' => $this->titulo,
'texto' => $this->texto,
'cliente_id' => $this->cliente_id,
'desafio_id' => $this->desafio_id,
'usuario_id' => $this->usuario_id,
'status' => $this->status,];

    }
}

