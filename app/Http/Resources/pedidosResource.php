<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class pedidosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'fecha' => $this->fecha,
        'producto_id' => $this->producto_id,
        'cliente_id' => $this->cliente_id,
        'fecha_entrega' => $this->fecha_entrega
    ];

    }
}
