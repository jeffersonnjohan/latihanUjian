<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
    }
}
