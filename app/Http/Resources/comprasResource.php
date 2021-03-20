<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class comprasResource extends JsonResource
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
            'pedido_id' => $this->pedido_id,
            'producto_id' => $this->producto_id,
            'cliente_id' => $this->cliente_id,
            'estado_compra' => $this->estado_compra,
            ];
    }
}
