<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ReceitaSubCategoriaResource extends ResourceCollection
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
'imagem' => $this->imagem,
'receita_categoria_id' => $this->receita_categoria_id,];

    }
}

