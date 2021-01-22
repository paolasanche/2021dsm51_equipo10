
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            
            $table->id()->comment('id');

            $table->string('clave', 25)->comment('Clave');
            $table->string('producto', 200)->comment('Producto');

            $table->unsignedInteger('existencias')->comment('Existencias');

            $table->decimal('precio_unitario', 10, 2)->comment('Precio unitario');

            $table->enum('unidad_medida', ['pieza', 'caja', 'kilogramo', 'metro', 'bolsa', 'otro'])->comment('Unidad de medida');

            $table->enum('estatus', ['activo','inactivo'])->comment('Estatus');

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
        Schema::dropIfExists('productos');
    }
}
