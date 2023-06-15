<?php

namespace Database\Factories;

use App\Models\AkunPemilikLapangan;
use App\Models\Lapangan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class LapanganFactory extends Factory
{
    protected $model = Lapangan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        $gender = $faker->randomElement(['male', 'female']);

        return [
            'venueName' => 'Lapangan' . ($gender == 'male' ? " Bapak " : " Ibu ") . $faker->firstName($gender),
            'oprTime' => "10.00 - 18.00",
            'address' => $faker->address(),
            'price' => rand(50, 100) . "000",
            'phoneNumber' => $this->randomIndonesianPhoneNumber(),
            'wifi' => rand(0, 1),
            'toilet' => rand(0, 1),
            'canteen' => rand(0, 1),
            'musalla' => rand(0, 1),
            'photo' => "https://picsum.photos/200",
            'sportId' => rand(1, 3),
            'ownerId' => rand(1, AkunPemilikLapangan::count()),
        ];
    }

    public function withLapangan($id)
    {
        return $this->state(function ($attributes) use ($id) {
            return [
                'sportId' => $id
            ];
        });
    }

    private function randomIndonesianPhoneNumber(): string
    {
        $prefix = "+62";
        // randomize 10-14 digit
        $sufix = rand(0, 9999999999999);
        // pad sufix with 0 to 10 or 14 digit
        $sufix = str_pad($sufix, rand(10, 13), '0', STR_PAD_LEFT);
        $phone = $prefix . $sufix;
        return $phone;
    }
}
