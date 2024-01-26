<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penunjang>
 */
class PenunjangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode' => fake()->numerify('Pnj-####'),
            'nama_penunjang' => fake()->name(),
            'harga_modal' => fake()->numerify('Rp ##.###'),
            'harga_jual' => fake()->numerify('Rp ##.###')
        ];
    }
}
