<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'post_id' => 1,
            'message' => 'Konsernya keren bangett, artisnya banyak'
        ]);
        Comment::create([
            'post_id' => 1,
            'message' => 'Wah, bagus ganteng banget!'
        ]);
        Comment::create([
            'post_id' => 1,
            'message' => 'Kiw kiwwwww cieee'
        ]);
        Comment::create([
            'post_id' => 2,
            'message' => 'Abang riskyaaa.. nyanyiin dong'
        ]);
        Comment::create([
            'post_id' => 2,
            'message' => 'Jadi suka sama abangg nii aw'
        ]);
    }
}
