<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedorestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            ['nombre_proveedor'=>'joel', 'edad_proveedor'=>'22', 'telefono_proveedor'=>'7258622943', 'correo_proveedor'=>'al258@gmail.com', 'direccion_proveedor'=>'3#303 av principal'],
            ['nombre_proveedor'=>'daniel', 'edad_proveedor'=>'56', 'telefono_proveedor'=>'5454987621', 'correo_proveedor'=>'al2852@gmail.com', 'direccion_proveedor'=>'458  calle#02'],
            ['nombre_proveedor'=>'marco', 'edad_proveedor'=>'32', 'telefono_proveedor'=>'0125488855', 'correo_proveedor'=>'al4525@gmail.com', 'direccion_proveedor'=>'16 de sep #710'],
            ['nombre_proveedor'=>'sergio', 'edad_proveedor'=>'65', 'telefono_proveedor'=>' 8794653210', 'correo_proveedor'=>'al215@gmail.com', 'direccion_proveedor'=>'16 de sep #720'],
            ['nombre_proveedor'=>'jesus', 'edad_proveedor'=>'55', 'telefono_proveedor'=>'1593687204', 'correo_proveedor'=>'al857@gmail.com', 'direccion_proveedor'=>'16 de sep #760'],



        ]);
    }
}
