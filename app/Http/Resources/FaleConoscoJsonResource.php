<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FaleConoscoResource extends ResourceCollection
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
'opcao' => $this->opcao,
'texto' => $this->texto,
'data_consulta' => $this->data_consulta,
'nota' => $this->nota,
'desafio_id' => $this->desafio_id,
'status' => $this->status,];

    }
}

