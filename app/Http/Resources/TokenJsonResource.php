<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TokenResource extends ResourceCollection
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
'cliente_id' => $this->cliente_id,
'registro_Id' => $this->registro_Id,
'plataforma' => $this->plataforma,
'device' => $this->device,
'model' => $this->model,
'platform' => $this->platform,
'uuid' => $this->uuid,
'version' => $this->version,];

    }
}

