<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FacturaTableSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {

            $pc = rand(1, 21);
            $costoPc = $pc * 66000;

            $certificadora = rand(1, 7);
            $costoCertificadora = $certificadora * 49500;

            $impMatricial = 1;
            $costoImpMatricial = $impMatricial * 49500;

            $impHp = 1;
            $costoImpHp = $impHp * 49500;

            $ups = rand(1, 3);
            $costoUps = $ups * 550000;

            $total = $costoPc + $costoCertificadora + $costoImpMatricial + $costoImpHp + $costoUps;

            $factura = Factura::create([
                        'cac' => rand(1, 90),
                        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
                        'pc' => $pc,
                        'costoPc' => $costoPc,
                        'certificadora' => $certificadora,
                        'costoCertificadora' => $costoCertificadora,
                        'impMatricial' => $impMatricial,
                        'costoImpMatricial' => $costoImpMatricial,
                        'impHp' => $impHp,
                        'costoImpHp' => $costoImpHp,
                        'ups' => $ups,
                        'costoUps' => $costoUps,
                        'total' => $total
            ]);
        }
    }

}
