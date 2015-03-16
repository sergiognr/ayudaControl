<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UpsTableSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {

            $potenciaYserial = $faker->randomElement(['6KVA', '10KVA','3KVA']);


            $ups = Ups::create([

                        'cacOrigen' => rand(1, 90),
                        'cacDestino' => rand(1, 90),
                        'modeloYmarca' => $faker->randomElement(['APC', 'LIEBERT']),
                        'potenciaYserial' =>$potenciaYserial,
                        'fechaDeInstalacion' => $faker->date(),
            ]);
        }
    }

}
