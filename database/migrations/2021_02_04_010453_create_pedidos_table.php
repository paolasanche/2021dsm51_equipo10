<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('pedidos', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->date('fecha', 200)->comment('fecha');

                    $table->integer('producto_id')->unsigned();            
                    $table->foreign('producto_id')->references('id')->on('productos');

                    $table->integer('cliente_id')->unsigned();            
                    $table->foreign('cliente_id')->references('id')->on('clientes');

                    $table->date('fecha_entrega', 200)->comment('fecha_entrega');

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
        Schema::dropIfExists('pedidos');
    }
}
