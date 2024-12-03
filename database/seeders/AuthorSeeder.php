<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = faker::create();

        $specialists = [
            'Data Science specialist',
            'Network Security specialist'
        ];

        for($i = 0; $i < 2; $i++){
            DB::table('authors')->insert([
                'name' => $faker->name(),
                'photo' => 'author'.($i+1).'.jpg',
                'specialist' => $specialists[$i],
            ]);
        }
    }
}
