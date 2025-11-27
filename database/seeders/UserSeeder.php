<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Jumlah user yang ingin dibuat
     * Ubah saja angka ini untuk menambah/mengurangi data
     */
    private $totalUsers = 100; // <-- Ganti angka ini sesuai kebutuhan

    public function run()
    {
        $faker = Faker::create('id_ID'); // Nama acak Indonesia

        for ($i = 1; $i <= $this->totalUsers; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => 'Martin' . $i . '@pcr.ac.id', // Email unik
                'password' => Hash::make('martin123'), // Password sama
                'profile_picture' => null,
            ]);
        }
    }
}
