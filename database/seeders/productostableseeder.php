<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productostableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            ['sabor'=>'fresa', 'tamano'=>'pequeno', 'descripcion'=>'familiar', 'precio'=>'350'],
            ['sabor'=>'chocolate', 'tamano'=>'mediano', 'descripcion'=>'personalizado', 'precio'=>'2852'],
            ['sabor'=>'chocolate', 'tamano'=>'grande', 'descripcion'=>'con cubierta de fresas', 'precio'=>'4525'],
            ['sabor'=>'3 leches', 'tamano'=>'grande', 'descripcion'=>' con crema pastelera', 'precio'=>'215'],
            ['sabor'=>'vainilla', 'tamano'=>'pequeño', 'descripcion'=>'sin cubierta', 'precio'=>'258.5'],



        ]);
    }
}
