<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    private $stazioni_arrivo = [
        'Roma Balduina',
        'Roma Tiburtina',
        'Roma Aurelia'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20 ; $i ++) {
            $train = new Train();
            $train->azienda = 'Azienda di treni';
            $train->stazione_partenza = 'Roma Termini';
            $train->stazione_arrivo = $this->stazioni_arrivo[rand(0, 2)];
            $train->orario_partenza = $faker->dateTimeBetween('now', '+1 week');
            $train->orario_arrivo = $faker->dateTimeBetween('now', '+1 week');
            $train->codice_treno = $faker->randomElement(['A', 'B', 'C']) . $faker->numberBetween(1, 20);
            $train->num_carrozze = rand(6, 10);
            $train->in_orario = !rand(0, 1);
            $train->cancellato = !rand(0, 1);
            $train->save();
        }
    }
}
