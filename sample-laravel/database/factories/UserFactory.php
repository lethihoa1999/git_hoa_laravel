<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'name' => $faker->name,
            'mail_address' => $faker->unique()->safeEmail,
            'password' => Hash::make('abc'),
            'address' => $faker->address,
            'phone' => str::random(15),
        ];
    }
}
