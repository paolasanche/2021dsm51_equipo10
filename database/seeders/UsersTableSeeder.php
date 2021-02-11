<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');



        User::insert([
            'name' => 'CYNTHIA PAOLA',
            'primer_apellido' => 'DURO',
            'segundo_apellido' => 'SANCHEZ',
            'fecha_nacimiento' => '2020-01-22',
            'sexo' => 'Femenino',
            'perfil' => 'Administrador',
            'email' => 'al221811737@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => $now,
            'updated_at' => $now 
        ]);


        User::insert([
            'name' => 'BRENDA XIMENA',
            'primer_apellido' => 'DURO',
            'segundo_apellido' => 'SANCHEZ',
            'fecha_nacimiento' => '2020-01-22',
            'sexo' => 'Femenino',
            'perfil' => 'Administrador',
            'email' => 'al2218118537@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => $now,
            'updated_at' => $now 
        ]);


        User::insert([
            'name' => 'JESUS RAUL',
            'primer_apellido' => 'JIMENEZ',
            'segundo_apellido' => 'ESQUIVEL',
            'fecha_nacimiento' => '2020-01-22',
            'sexo' => 'Masculino',
            'perfil' => 'Administrador',
            'email' => 'al221811756@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => $now,
            'updated_at' => $now 
        ]);






    }
}