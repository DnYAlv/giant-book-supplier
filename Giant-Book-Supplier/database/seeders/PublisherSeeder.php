<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('publishers')->insert([
            [
                'name' => 'First Publisher',
                'address' => $faker->address(),
                'phone' => '0812382429',
                'email' => 'publisher1@gmail.com',
                'image' => $faker->imageUrl()
            ],
            [
                'name' => 'Second Publisher',
                'address' => $faker->address(),
                'phone' => '08271939283',
                'email' => 'publisher2@gmail.com',
                'image' => $faker->imageUrl()
            ],
            [
                'name' => 'Third Publisher',
                'address' => $faker->address(),
                'phone' => '08274919395',
                'email' => 'publisher3@gmail.com',
                'image' => $faker->imageUrl()
            ]
        ]);
    }
}
