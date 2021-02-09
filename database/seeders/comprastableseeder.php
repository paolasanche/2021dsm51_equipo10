<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comprastableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        DB::table('compras')->insert([

           [ 'pedido_id'=>'1','producto_id'=>'1', 'cliente_id'=>'2', 'estado_compra'=>'pendiente'],
           [ 'pedido_id'=>'1','producto_id'=>'3', 'cliente_id'=>'1', 'estado_compra'=>'pendiente'],
           [ 'pedido_id'=>'1','producto_id'=>'1', 'cliente_id'=>'2', 'estado_compra'=>'pendiente'],
           [ 'pedido_id'=>'1','producto_id'=>'2', 'cliente_id'=>'3', 'estado_compra'=>'pendiente'],
           [ 'pedido_id'=>'1','producto_id'=>'1', 'cliente_id'=>'2', 'estado_compra'=>'pendiente'],
       

        ]);
    }
}
