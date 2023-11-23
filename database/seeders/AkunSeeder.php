<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $akuns = [
            [
                'id' => '1',
                'name' => 'admincia',
                'username' => 'admincia',
                'admin' => '1',
                'password' => 'admincia',],
            [
                'id' => '2',
                'name' => 'admin',
                'username' => 'admin',
                'admin' => '1',
                'password' => '123123',
            ],

        ];

        foreach ($akuns as $akun){
            User::create([
                'id' => $akun['id'],
                'name' => $akun['name'],
                'username' => $akun['username'],
                'admin' => $akun['admin'],
                'password' => $akun['password'],
            ]); }
    }
}
