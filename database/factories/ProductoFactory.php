<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clave' => Str::random(25),
            'producto' => $this->faker->text(rand(100,200)),
            'existencias' => $this->faker->randomNumber(3, true),
            'precio_unitario' => $this->faker->randomFloat(2, 5, 100),
            'unidad_medida' => $this->faker->randomElement(['pieza', 'caja', 'jilogramo', 'metro', 'bolsa', 'otro' ]),
            'estatus' => $this->faker->randomElement('activo','inactivo')
        ];
    }
}
