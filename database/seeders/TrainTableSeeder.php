<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

// importiamo il faker
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //facciamo creare dieci elementi fittizzi per i treni
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->company;
            $newTrain->stazione_partenza = $faker->city;
            $newTrain->stazione_arrivo = $faker->city;
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            // Genera date da oggi fino a 30 giorni 
            $newTrain->data_partenza = $faker->dateTimeBetween('now', '+30 days')->format('Y-m-d');
            $newTrain->codice_treno = strtoupper($faker->bothify('??###'));
            $newTrain->numero_carrozze = $faker->numberBetween(3, 20);
            // 80% che sia in orario e 10% che sia cancellato
            $newTrain->in_orario = $faker->boolean(80);
            $newTrain->cancellato = $faker->boolean(10);

            $newTrain->save();
        }
    }
}
