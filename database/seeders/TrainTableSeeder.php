<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;
use Generator;
use Illuminate\Support\Facades\Date;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $currDate = Date::now()->toDateString();

        for ($i=0; $i < 10 ; $i++) {
            $train = new Train();
            $train->train_code = $faker->unique()->randomNumber(4);
            $train->agency_name = $faker->company;
            $train->departure_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->departure_time = $faker->time('H:i:s');
            $train->departure_date = $faker->dateTimeBetween($currDate, $currDate);
            $train->arrival_time = $faker->time('H:i:s');
            $train->train_carriage_number = $faker->numberBetween(1,10);
            $train->in_time = $faker->boolean;
            $train->canceled = $faker->boolean;
            $train->save();
        }

        for ($i=0; $i < 20 ; $i++) {
            $train = new Train();
            $train->train_code = $faker->unique()->randomNumber(4);
            $train->agency_name = $faker->company;
            $train->departure_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->departure_time = $faker->time('H:i:s');
            $train->departure_date = $faker->dateTimeBetween($currDate, '+1 years');
            $train->arrival_time = $faker->time('H:i:s');
            $train->train_carriage_number = $faker->numberBetween(1,10);
            $train->in_time = $faker->boolean;
            $train->canceled = $faker->boolean;
            $train->save();
        }
    }
}
