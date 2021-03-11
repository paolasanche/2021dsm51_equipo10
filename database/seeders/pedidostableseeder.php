<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pedidostableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void  
     */
    public function run()
    {
        DB::table('pedidos')->insert([

            ['fecha'=>'25-01-2020', 'producto_id'=>'1', 'cliente_id'=>'2','fecha_entrega'=>'25-01-2020'],
            ['fecha'=>'25-01-2020', 'producto_id'=>'3', 'cliente_id'=>'1','fecha_entrega'=>'25-01-2020'],
            ['fecha'=>'25-01-2020', 'producto_id'=>'1', 'cliente_id'=>'2','fecha_entrega'=>'25-01-2020'],
            ['fecha'=>'25-01-2020', 'producto_id'=>'2', 'cliente_id'=>'3','fecha_entrega'=>'25-01-2020'],
            ['fecha'=>'25-01-2020', 'producto_id'=>'1', 'cliente_id'=>'2','fecha_entrega'=>'25-01-2020'],
     

        ]);
    }
}
