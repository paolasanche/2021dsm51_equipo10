<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class ClientesResource extends JsonResource 
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
            'nombre_cliente' => $this->nombre_cliente,
            'telefono_cliente' => $this->telefono_cliente,
            'correo_cliente' => $this->correo_cliente,
            'edad_cliente' => $this->edad_cliente,
            'drireccion_cliente' => $this->drireccion_cliente,
            'estado_cliente' => $this->estado_cliente,
            'municipio_cliente' => $this->municipio_cliente,
            'codigopostal_cliente' => $this->codigopostal_cliente,
            'forma_pago' => $this->forma_pago,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
