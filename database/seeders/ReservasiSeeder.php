<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservasi;

class ReservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservasis = [
            [
                'id' => '1',
                'notelp' => '082188234288',
                'email' => 'haiolaf@gmail.com',
                'nama' => 'Hai Olaf',
                'jumlahkamar' => '2',],
            [
                'id' => '2',
                'notelp' => '0811111111',
                'email' => 'ciaaaa@gmail.com',
                'nama' => 'Cia Rey',
                'jumlahkamar' => '4',
            ],

        ];

        foreach ($reservasis as $reservasi){
            Reservasi::create([
                'id' => $reservasi['id'],
                'notelp' => $reservasi['notelp'],
                'email' => $reservasi['email'],
                'nama' => $reservasi['nama'],
                'jumlahkamar' => $reservasi['jumlahkamar'],
            ]); }
    }
}
