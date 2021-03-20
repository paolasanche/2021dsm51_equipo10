<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id');
     
            $table->integer('pedido_id')->unsigned();            
            $table->foreign('pedido_id')->references('id')->on('pedidos');

            $table->integer('producto_id')->unsigned();            
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->integer('cliente_id')->unsigned();            
            $table->foreign('cliente_id')->references('id')->on('clientes');
/*


            $table->string('pedido_id', 200)->comment('pedido_id');

            $table->string('producto_id', 200)->comment('producto_id');

            $table->string('cliente_id', 200)->comment('cliente_id');
            
¨*/
            $table->string('estado_compra', 200)->comment('estado_compra');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
