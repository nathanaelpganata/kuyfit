<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\JenisOlahraga::insert(
            [
                [
                    'id' => 1,
                    'sportType' => 'Basketball',
                ],
                [
                    'id' => 2,
                    'sportType' => 'Futsal',
                ],
                [
                    'id' => 3,
                    'sportType' => 'Badminton',
                ]
            ]
        );

        \App\Models\AkunPenyewa::factory(10)->create();
        \App\Models\AkunPemilikLapangan::factory(10)->create();
        $lapangan_basket = \App\Models\Lapangan::factory(10)->withLapangan(1)->make();
        $lapangan_futsal = \App\Models\Lapangan::factory(10)->withLapangan(2)->make();
        $lapangan_badminton = \App\Models\Lapangan::factory(10)->withLapangan(3)->make();

        \App\Models\Lapangan::insert($lapangan_basket->toArray());
        \App\Models\Lapangan::insert($lapangan_futsal->toArray());
        \App\Models\Lapangan::insert($lapangan_badminton->toArray());
    }
}
