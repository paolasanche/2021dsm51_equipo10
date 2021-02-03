<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sucursalestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            ['direccion_sucursal'=>'3#303 av principal','telefono_sucursal'=>'7258622943', 'correo_sucursal'=>'al258@gmail.com', 'proveedor_id'=>'1'],
            ['direccion_sucursal'=>'458  calle#02','telefono_sucursal'=>'5454987621','correo_sucursal'=>'al2852@gmail.com', 'proveedor_id'=>'1'],
            ['direccion_sucursal'=>'16 de sep #710','telefono_sucursal'=>'0125488855', 'correo_sucursal'=>'al4525@gmail.com', 'proveedor_id'=>'2'],
            ['direccion_sucursal'=>'16 de sep #720','telefono_sucursal'=>' 8794653210', 'correo_sucursal'=>'al215@gmail.com', 'proveedor_id'=>'1'],
            ['direccion_sucursal'=>'16 de sep #760','telefono_sucursal'=>'1593687204', 'correo_sucursal'=>'al857@gmail.com', 'proveedor_id'=>'3'],



        ]);
    }
}
