<?php

use Illuminate\Database\Seeder;

class MonthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createMonth();
    }

    private function createMonth()
    {
        factory(App\Entities\Month::class)->create([
            'month'  => 'Enero'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Febrero'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Marzo'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Abril'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Mayo'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Junio'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Julio'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Agosto'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Septiembre'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Octubre'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Noviembre'
        ]);

        factory(App\Entities\Month::class)->create([
            'month'  => 'Diciembre'
        ]);
    }
}
