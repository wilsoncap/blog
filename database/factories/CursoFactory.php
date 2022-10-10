<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\curso>
 */
class CursoFactory extends Factory
{
     protected $model = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // para crear urls amigables
        $name = $this->faker->sentence();
        return [
            'name'=> $name ,
            'slug' => Str::slug($name, "-"),
            'description'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
