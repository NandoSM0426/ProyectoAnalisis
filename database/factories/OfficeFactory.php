<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * El nombre del modelo al que asociar el factory.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => fake()->name(),
            'Descripcion' => fake()->text(),
            'Precio' => fake()->randomFloat(2, 0, 1000),
            'Disponibilidad' => fake()->boolean(),
            'Imagen' => fake()->imageUrl(640, 480),
        ];
    }
}