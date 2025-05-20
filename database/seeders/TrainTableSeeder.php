<?php

namespace Database\Seeders;

// Importiamo le classi necessarie
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Generiamo 10 treni con dati casuali
        for ($i = 0; $i < 10; $i++) {
            // Creiamo una nuova istanza del modello Train
            $newTrain = new Train();

            // Assegniamo valori casuali usando Faker
            $newTrain->azienda = $faker->company;
            $newTrain->stazione_partenza = $faker->city;
            $newTrain->stazione_arrivo = $faker->city;
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();

            // Genera date future tra oggi e 30 giorni
            $newTrain->data_partenza = $faker->dateTimeBetween('now', '+30 days')->format('Y-m-d');

            // Genera codice treno con 2 lettere maiuscole e 3 numeri
            $newTrain->codice_treno = strtoupper($faker->bothify('??###'));

            // Numero carrozze tra 3 e 20
            $newTrain->numero_carrozze = $faker->numberBetween(3, 20);

            // 80% probabilità che sia in orario
            $newTrain->in_orario = $faker->boolean(80);
            // 10% probabilità che sia cancellato
            $newTrain->cancellato = $faker->boolean(10);

            // Salva il treno nel database
            $newTrain->save();
        }
    }
}
