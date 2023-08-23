<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Italo']);
            $train->departure_station = $faker->randomElement(['Milano Centrale', 'Pisa Centrale', 'La Spezia Centrale', 'Bologna Centrale', 'Napoli Centrale', 'Trieste Centrale']);
            $train->arrival_station = $faker->randomElement(['Milano Centrale', 'Pisa Centrale', 'La Spezia Centrale', 'Bologna Centrale', 'Napoli Centrale', 'Trieste Centrale']);
            $train->departure_date = $faker->randomElement(['2023-08-23', '2023-08-24', '2023-08-25']);
            $train->departure_time = $faker->time('H:i:s', '23:59:59');
            $train->arrival_time = $faker->time('H:i:s', '23:59:59');
            $train->code = $faker->randomNumber(8, true);
            $train->carriages = $faker->randomDigitNotNull();
            $train->in_time = $faker->boolean();
            $train->canceled = $faker->boolean();

            $train->save();
        }
    }
}
