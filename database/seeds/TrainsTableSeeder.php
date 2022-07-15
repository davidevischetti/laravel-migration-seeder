<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20 ; $i ++) {
            $train = new Train();
            $train->azienda = 'ciccio';
            $train->stazione_partenza = 'stazione uno';
            $train->stazione_arrivo = 'stazione due';
            $train->orario_partenza = '2022-01-01 00:01:00';
            $train->orario_arrivo = '2022-02-01 23:59:00';
            $train->codice_treno = 1;
            $train->num_carrozze = 8;
            $train->in_orario = false;
            $train->cancellato = true;
            $train->save();
        }
    }
}
