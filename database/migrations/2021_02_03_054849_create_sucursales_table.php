<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('direccion_sucursal', 200)->comment('direccion_sucursal');
                $table->string('telefono_sucursal', 200)->comment('telefono_sucursal');
                $table->string('correo_sucursal', 200)->comment('correo_sucursal');
                $table->integer('proveedor_id')->unsigned();            
                $table->foreign('proveedor_id')->references('id')->on('proveedores');
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
        Schema::dropIfExists('sucursales');
    }
}
