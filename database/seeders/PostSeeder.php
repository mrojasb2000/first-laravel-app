<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = "Lorem Ipsum";
        $post->content = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.";
        $post->is_active = true;
        $post->published_at = now();
        $post->save();
    }
}
