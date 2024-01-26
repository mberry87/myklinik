<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Administrasi>
 */
class AdministrasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode' => fake()->numerify('Adm-####'),
            'nama_administrasi' => fake()->name(),
            'tarif' => fake()->randomNumber(5, True),
        ];
    }
}
