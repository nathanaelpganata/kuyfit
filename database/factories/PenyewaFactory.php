<?php

namespace Database\Factories;

use App\Models\AkunPenyewa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PenyewaFactory extends Factory
{
    protected $model = AkunPenyewa::class;
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
            'firstName' => $faker->firstName($gender),
            'lastName' => $faker->lastName($gender),
            'email' => $faker->unique()->safeEmail(),
            'phoneNumber' => $this->randomIndonesianPhoneNumber(),
            'gender' => ($gender == 'male') ? 1 : 0,
            'password' => Hash::make('12345678')
        ];
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
