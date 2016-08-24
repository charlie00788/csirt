<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCargo();
    }

    private function createCargo()
    {
        factory(\App\Entities\Cargo::class)->create([
            'cargo'     => 'Jefe de Departamento VI',
            'nombre'    => 'CN. DAEN. Jorge Escobar Zapatito',
            'year'      => '2016'
        ]);
    }
}
