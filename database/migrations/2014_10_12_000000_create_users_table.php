<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('name', 25)->comment('Nombre');
            $table->string('primer_apellido', 25)->comment('Primer apellido');
            $table->string('segundo_apellido', 25)->nullable()->comment('Segundo apellido');
            $table->date('fecha_nacimiento')->comment('Fecha de nacimiento');
            $table->enum('sexo', ['Femenino', 'Masculino', 'Prefiere no decirlo'])->comment('Sexo');
            $table->enum('perfil', ['Administrador', 'Ventas', 'Cliente'])->comment('Perfil');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
