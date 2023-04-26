<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            $post = new Post();
            $post->nome = $faker->unique()->sentence($faker->numberBetween(3, 5));
            $post->content = $faker->optional()->text(500);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
