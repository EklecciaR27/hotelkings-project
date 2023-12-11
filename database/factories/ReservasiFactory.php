<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Guest;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservasi>
 */
class ReservasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gambarktp = [
            'ktp-1.jpg',
            'ktp-2.jpg',
        ];

        $filebukti = [
            '1.pdf',
            '2.pdf',
        ];
        return [
            'notelp' => fake()->unique()->numberBetween(1000000000, 9999999999),
            'nama' => fake()->name(),
            'email' => fake()->email(),
            'jumlahkamar' => fake()->numberBetween(1, 1000),
            'guest_id' => Guest::all()->random()->id,
            'gambarktp' => fake()->randomElement($gambarktp),
        ];
    }
}
