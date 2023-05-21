<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Best Day Ever',
            'image' => 'bagusAdisaka.jpg'
        ]);
        Post::create([
            'title' => 'Sayang Fiersa Besari',
            'image' => 'riskyaPutra.jpg'
        ]);
        Post::create([
            'title' => 'Tata Cara Bermain Golf yang Baik',
            'image' => 'riskyaGanteng.jpg'
        ]);

        $faker = Faker::create('id_ID');

        for($i = 0; $i < 10; $i++){
            Post::create([
                'title' => $faker->sentence(),
                'image' => $faker->word().'.jpg',
            ]);
        }

    }
}
