<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guest;
use App\Models\Reservasi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Guest::factory(10)->create();
        Reservasi::factory(10)->create();
        // $this->call([ReservasiSeeder::class]);

    }
}
