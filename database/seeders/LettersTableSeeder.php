<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $newLetter = new Letter();
            $newLetter->name = $faker->firstName();
            $newLetter->surname = $faker->lastName();
            $newLetter->address = $faker->streetAddress();
            $newLetter->city = $faker->city();
            $newLetter->arrival_date = $faker->date();
            $newLetter->gift = $faker->text(20);
            $newLetter->text = $faker->text();
            $newLetter->kid_rating = $faker->numberBetween(1, 5);
            $newLetter->delivered = $faker->boolean();
            $newLetter->save();
        }
    }
}
