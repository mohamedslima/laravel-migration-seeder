<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $agencies = [
            'Trenitalia',
            'Italo',
            'TGV',
            'Trenord'
        ];

        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->agency = $agencies[rand(0, count($agencies) - 1)];
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = 
        }
    }
}
