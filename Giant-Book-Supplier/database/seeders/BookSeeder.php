<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('books')->insert([
            [
                'publisher_id' => 1,
                'title' => 'Book Title 1',
                'author' => 'Author 1',
                'year' => '2020',
                'synopsis' => $faker->paragraph(3),
                'image' => $faker->imageUrl(640, 500, 'books', true)
            ],
            [
                'publisher_id' => 1,
                'title' => 'NewLand',
                'author' => 'Author 12',
                'year' => '2019',
                'synopsis' => $faker->paragraph(3),
                'image' => $faker->imageUrl(640, 500, 'books', true)
            ],
            [
                'publisher_id' => 2,
                'title' => 'Book Title 2',
                'author' => 'Author 2',
                'year' => '2021',
                'synopsis' => $faker->paragraph(3),
                'image' => $faker->imageUrl(640, 500, 'books', true)
            ],
            [
                'publisher_id' => 2,
                'title' => 'Book Title 2.1',
                'author' => 'Author 3',
                'year' => '2021',
                'synopsis' => $faker->paragraph(3),
                'image' => $faker->imageUrl(640, 500, 'books', true)
            ],
            [
                'publisher_id' => 3,
                'title' => 'Book Title 3',
                'author' => 'Author Newbie',
                'year' => '2001',
                'synopsis' => $faker->paragraph(3),
                'image' => $faker->imageUrl(640, 500, 'books', true)
            ],
            [
                'publisher_id' => 3,
                'title' => 'Book Title 3.1',
                'author' => 'Author ProCons',
                'year' => '2002',
                'synopsis' => $faker->paragraph(3),
                'image' => $faker->imageUrl(640, 500, 'books', true)
            ],
            [
                'publisher_id' => 2,
                'title' => 'Book Title 4',
                'author' => 'Author 4',
                'year' => '2019',
                'synopsis' => $faker->paragraph(3),
                'image' => $faker->imageUrl(640, 500, 'books', true)
            ],
            [
                'publisher_id' => 1,
                'title' => 'Great Book',
                'author' => 'Author 909',
                'year' => '2018',
                'synopsis' => $faker->paragraph(3),
                'image' => $faker->imageUrl(640, 500, 'books', true)
            ]
        ]);
    }
}
