<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class empleadosResource extends JsonResource
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
            'nombre_empleado' => $this->nombre_empleado,
            'edad_empleado' => $this->edad_empleado,
            'telefono_empleado' => $this->telefono_empleado,
            'correo_empleado' => $this->correo_empleado,            
            'drireccion_empleado' => $this->drireccion_empleado,
            'puesto_empleado' => $this->puesto_empleado,           
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
