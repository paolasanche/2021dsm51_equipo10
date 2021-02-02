<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nombre_proveedor', 200)->comment('nombre_proveedor');
                $table->string('edad_proveedor', 200)->comment('edad_proveedor');
                $table->string('telefono_proveedor', 200)->comment('telefono_proveedor');
                $table->string('correo_proveedor', 200)->comment('correo_proveedor');
                $table->string('direccion_proveedor', 200)->comment('direccion_proveedor');
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
        Schema::dropIfExists('proveedores');
    }
}
