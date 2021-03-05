<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 6 ; $i++) { 
            $newComic = new Comic();
            $newComic->title = $faker->words(5, true);
            $newComic->description = $faker->text(300);
            $newComic->slug = Str::slug($newComic->title);
            $newComic->art_by = $faker->name();
            $newComic->written_by = $faker->name();
            $newComic->series = $faker->randomDigitNotNull();
            $newComic->price = $faker->randomFloat(2, 2, 99);
            $newComic->release_date = $faker->dateTime();
            $newComic->volume = $faker->randomDigitNotNull();
            $newComic->save();
        }
    }
}
