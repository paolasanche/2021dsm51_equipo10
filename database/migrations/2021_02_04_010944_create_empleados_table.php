<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_empleado', 200)->comment('nombre_empleado');
            $table->string('edad_empleado', 200)->comment('edad_empleado');
            $table->string('telefono_empleado', 200)->comment('telefono_empleado');
            $table->string('correo_empleado', 200)->comment('correo_empleado');
            $table->string('direccion_empleado', 200)->comment('direccion_empleado');
            $table->string('puesto_empleado', 200)->comment('puesto_empleado');

          
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
        Schema::dropIfExists('empleados');
    }
}
