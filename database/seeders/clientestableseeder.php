<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Clientes;

class clientestableseeder extends Seeder  
{
    /** bhh
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            ['nombre_cliente'=>'sandra', 'telefono_cliente'=>'7224327417', 'correo_cliente'=>'sandra123@gmail.com', 'edad_cliente'=>'35', 'direccion_cliente'=>'16 de sep #701', 'estado_cliente'=>'mexico', 'municipio_cliente'=>'toluca', 'codigopostal_cliente'=>'52106', 'forma_pago'=>'efectivo' ],
            ['nombre_cliente'=>'lilian', 'telefono_cliente'=>'7224327455', 'correo_cliente'=>'54lk3@gmail.com', 'edad_cliente'=>'22', 'direccion_cliente'=>'16 de sep #701', 'estado_cliente'=>'mexico', 'municipio_cliente'=>'toluca', 'codigopostal_cliente'=>'52106', 'forma_pago'=>'efectivo'],
            ['nombre_cliente'=>'sofia', 'telefono_cliente'=>'7225648917', 'correo_cliente'=>'555gttfhgh3@gmail.com', 'edad_cliente'=>'45', 'direccion_cliente'=>'16 de sep #701', 'estado_cliente'=>'mexico', 'municipio_cliente'=>'toluca', 'codigopostal_cliente'=>'52106', 'forma_pago'=>'efectivo'],
            ['nombre_cliente'=>'cassandra', 'telefono_cliente'=>'7212365417', 'correo_cliente'=>'vcfvg2555@gmail.com', 'edad_cliente'=>'25', 'direccion_cliente'=>'16 de sep #701', 'estado_cliente'=>'mexico', 'municipio_cliente'=>'toluca', 'codigopostal_cliente'=>'52106', 'forma_pago'=>'efectivo'],
            ['nombre_cliente'=>'estefania', 'telefono_cliente'=>'7224378965', 'correo_cliente'=>'sajjj3@gmail.com', 'edad_cliente'=>'50', 'direccion_cliente'=>'16 de sep #701', 'estado_cliente'=>'mexico', 'municipio_cliente'=>'toluca', 'codigopostal_cliente'=>'52106', 'forma_pago'=>'efectivo'],



        ]);
    }
}
