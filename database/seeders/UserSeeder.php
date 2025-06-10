<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $chunkSize = 1000;

        for ($i = 0; $i < 100000 / $chunkSize; $i++) {
            $users = [];

            for ($j = 0; $j < $chunkSize; $j++) {
                $index = $i * $chunkSize + $j + 1;

                $users[] = [
                    'name' => $faker->name,
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => "user{$index}@gmail.com",
                    'phone' => $faker->numerify('##########'),
                    'date_of_birth' => $faker->dateTimeBetween('1950-01-01', '2005-12-31')->format('Y-m-d'),
                    'address' => $faker->address,
                    'city' => $faker->city,
                    'country' => $faker->country,
                    'occupation' => $faker->jobTitle,
                    'status' => $faker->randomElement(['Active', 'Inactive', 'Suspended']),
                    'password' => Hash::make('password'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            User::insert($users);
        }
    }
}
