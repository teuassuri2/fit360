<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MuralResource extends ResourceCollection
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
'usuario_sistema_id' => $this->usuario_sistema_id,
'link' => $this->link,
'data' => $this->data,
'imagem' => $this->imagem,];

    }
}

