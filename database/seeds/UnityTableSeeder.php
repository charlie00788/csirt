<?php

use Illuminate\Database\Seeder;

class UnityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUnity();
    }

    private function createUnity()
    {
        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Departamento VI "Enseñanzas e Institutos Navales"'
        ]);

        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Escuela Naval Militar "V.Almte. Ronant Monje Roca"'
        ]);

        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Escuela de Sargentos "Reynaldo Zeballos"'
        ]);

        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Curso de Aplicación Naval'
        ]);

        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Curso de Estado Mayor Naval'
        ]);

        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Escuela Marítima'
        ]);

        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Escuela de Idiomas'
        ]);
    }
}
