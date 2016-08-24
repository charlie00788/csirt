<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCity();
    }

    private function createCity()
    {
        factory(App\Entities\City::class)->create([
            'id'   => 'LP',
            'city' => 'La Paz'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'CB',
            'city' => 'Cochabamba'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'SC',
            'city' => 'Santa Cruz'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'PN',
            'city' => 'Pando'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'BN',
            'city' => 'Beni'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'OR',
            'city' => 'Oruro'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'PT',
            'city' => 'Potosí'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'TJ',
            'city' => 'Tarija'
        ]);

        factory(App\Entities\City::class)->create([
            'id'   => 'CH',
            'city' => 'Chuquisaca'
        ]);
    }
}
