<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\portfolio;
use Faker\Generator as Faker;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $post = new portfolio();
            $post->title = $faker->sentence(3);
            $post->content = $faker->text(500);
            $post->image = $faker->imageUrl(800, 600, 'job', true);
            $post->save();
        }
    }
}
