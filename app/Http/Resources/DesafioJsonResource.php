<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DesafioResource extends ResourceCollection
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
'nome' => $this->nome,
'texto' => $this->texto,
'video' => $this->video,
'imagem' => $this->imagem,
'valor_inicial' => $this->valor_inicial,
'valor_final' => $this->valor_final,
'dias' => $this->dias,
'pago' => $this->pago,
'cliente_id' => $this->cliente_id,
'vimeo' => $this->vimeo,
'ordem' => $this->ordem,
'dia_solicitacao_peso' => $this->dia_solicitacao_peso,
'status' => $this->status,
'valor_final_dia' => $this->valor_final_dia,
'texto_site' => $this->texto_site,
'desafio' => $this->desafio,
'desafio_tipo_id' => $this->desafio_tipo_id,
'professor' => $this->professor,];

    }
}

