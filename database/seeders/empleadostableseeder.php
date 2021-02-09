<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class empleadostableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            ['nombre_empleado'=>'sandra', 'edad_empleado'=>'35' ,'telefono_empleado'=>'7224327417', 'correo_empleado'=>'sandra123@gmail.com', 'direccion_empleado'=>'16 de sep #701', 'puesto_empleado'=>'vendedor'],
            ['nombre_empleado'=>'lilian','edad_empleado'=>'22','telefono_empleado'=>'7224327455', 'correo_empleado'=>'54lk3@gmail.com',  'direccion_empleado'=>'16 de sep #701', 'puesto_empleado'=>'gerente'],
            ['nombre_empleado'=>'sofia', 'edad_empleado'=>'45', 'telefono_empleado'=>'7225648917', 'correo_empleado'=>'555gttfhgh3@gmail.com', 'direccion_empleado'=>'16 de sep #701', 'puesto_empleado'=>'administrador'],
            ['nombre_empleado'=>'cassandra', 'edad_empleado'=>'25', 'telefono_empleado'=>'7212365417', 'correo_empleado'=>'vcfvg2555@gmail.com', 'direccion_empleado'=>'16 de sep #701', 'puesto_empleado'=>'administrador'],
            ['nombre_empleado'=>'estefania', 'edad_empleado'=>'50', 'telefono_empleado'=>'7224378965', 'correo_empleado'=>'sajjj3@gmail.com', 'direccion_empleado'=>'16 de sep #701', 'puesto_empleado'=>'vendedor'],



        ]);
    }
}
