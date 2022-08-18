<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PesoMedidaResource extends ResourceCollection
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
'peso' => $this->peso,
'imagem' => $this->imagem,
'usuario_id' => $this->usuario_id,
'quadril' => $this->quadril,
'cintura' => $this->cintura,
'torax' => $this->torax,
'braco_direito' => $this->braco_direito,
'braco_esquerdo' => $this->braco_esquerdo,
'abdomen' => $this->abdomen,
'coxas' => $this->coxas,
'panturilha' => $this->panturilha,];

    }
}

