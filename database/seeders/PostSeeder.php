<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        $post = new Post;
        $post->title = "Daytime";
        $post->description = "This is the daytime of my city";
        $post->image = "1704123968.jpg";
        $post->save();
    }
}
