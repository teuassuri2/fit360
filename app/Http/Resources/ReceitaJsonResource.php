<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ReceitaResource extends ResourceCollection
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
'ingredientes' => $this->ingredientes,
'preparo' => $this->preparo,
'obs' => $this->obs,
'receita_sub_categoria_id' => $this->receita_sub_categoria_id,];

    }
}

