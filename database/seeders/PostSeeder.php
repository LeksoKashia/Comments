<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


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
            "name" => "Favorite Books ?",
        ]);
        Post::create([
            "name" => "Thougths on Kafka's 'The trial'",
        ]);
        Post::create([
            "name" => "Knives out 2 initial release",
        ]);
        
    }
}
