<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = faker::create();

        $categories = [
            'Data Science',
            'Network Security'
        ];

        for($i = 0; $i < 2; $i++){
            DB::table('categories')->insert([
                'name' => $categories[$i],
            ]);
        }
    }
}
