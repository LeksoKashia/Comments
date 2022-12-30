<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;


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
            "post_id" => 1,
            "body" => "War and Peace",
            "user_name" => 'Lekso'
            
        ]);
        Comment::create([
            "post_id" => 1,
            "body" => "Sherlock Holmes",
            "user_name" => 'Lekso'
            
        ]);
        Comment::create([
            "post_id" => 1,
            "body" => "Harry Potter",
            "user_name" => 'Lekso'
            
        ]);

        Comment::create([
            "post_id" => 2,
            "body" => "Great Book",
            "user_name" => 'Lekso'
            
        ]);
        Comment::create([
            "post_id" => 2,
            "body" => "Kafka was a genius",
            "user_name" => 'Ana'
            
        ]);
        Comment::create([
            "post_id" => 2,
            "body" => "Book applies to our present, so relatable",
            "user_name" => 'Ana'

            
        ]);
        Comment::create([
            "post_id" => 3,
            "body" => "Looking forward watching it, can't wait!",
            "user_name" => 'Ana'

            
        ]);
        Comment::create([
            "post_id" => 3,
            "body" => "Liked movie, but first franchise was out of the world",
            "user_name" => 'Ana'

            
        ]);
        Comment::create([
            "post_id" => 3,
            "body" => "It was great, 9/10",
            "user_name" => 'Ana'

            
        ]);
    }
}
