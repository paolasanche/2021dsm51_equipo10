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

            ['fecha'=>'25-01-2020', 'product_id'=>'1', 'cliente_id'=>'2'],
            ['fecha'=>'25-01-2020', 'product_id'=>'3', 'cliente_id'=>'1'],
            ['fecha'=>'25-01-2020', 'product_id'=>'1', 'cliente_id'=>'2'],
            ['fecha'=>'25-01-2020', 'product_id'=>'2', 'cliente_id'=>'3'],
            ['fecha'=>'25-01-2020', 'product_id'=>'1', 'cliente_id'=>'2'],
       

        ]);
    }
}