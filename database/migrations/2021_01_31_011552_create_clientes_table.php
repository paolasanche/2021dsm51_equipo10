<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_cliente', 200)->comment('nombre_cliente');
            $table->string('telefono_cliente', 200)->comment('telefono_cliente');
            $table->string('correo_cliente', 200)->comment('correo_cliente');
            $table->string('edad_cliente', 200)->comment('edad_cliente');
            $table->string('direccion_cliente', 200)->comment('direccion_cliente');
            
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
        Schema::dropIfExists('clientes');
    }
}
