<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = faker::create();

        $titles = [
            'Machine Learning',
            'Deep Learning',
            'Natural Language Processing',
            'Software Security',
            'Network Administration',
            'Popular Network Technology'
        ];

        for($i = 0; $i < 6; $i++){
            DB::table('articles')->insert([
                'title' => $titles[$i],
                'photo' => 'article'.($i+1).'.jpg',
                'description' => $faker->paragraph(6),
                'posted_date' => $faker->date('Y-m-d', 'now'),
                
                'author_id' => $i < 3 ? 1 : 2,
                'category_id' => $i < 3 ? 1 : 2
            ]);
        }
    }
}
