<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DesafioConteudoResource extends ResourceCollection
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
'dia' => $this->dia,
'hora' => $this->hora,
'titulo' => $this->titulo,
'texto' => $this->texto,
'imagem' => $this->imagem,
'video' => $this->video,
'ordem' => $this->ordem,
'vimeo' => $this->vimeo,];

    }
}

