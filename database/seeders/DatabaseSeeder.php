<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** hhh
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(UsersTableSeeder::class);
       $this->call(clientestableseeder::class);
       $this->call(productostableseeder::class);
       $this->call(pedidostableseeder::class);
       $this->call(empleadostableseeder::class);
       $this->call(comprastableseeder::class);
    }
}
