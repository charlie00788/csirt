<?php

use Illuminate\Database\Seeder;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser();
        $this->createTopic();
    }

    /**
     * Para crear usuarios del sistema para las unidades
     */
    private function createUser()
    {
        factory(\App\Entities\User::class)->create([
            'id'    => '200',
            'role'   => 'user',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Person::class)->create([
            'id'        => '200',
            'tin'       => '200'
        ]);
    }

    private function createTopic()
    {
        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Primer Año Naval',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Segundo Año Naval',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Tercer Año Naval',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Cuarto Año Naval',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Quinto Año Naval',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Antigüedad de Egreso',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Primer Año Naval',
            'unity_id' => '3'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Segundo Año Naval',
            'unity_id' => '3'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Tercer Año Naval',
            'unity_id' => '3'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Antigüedad de Egreso',
            'unity_id' => '3'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Planeamiento',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Inteligencia de Combate',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Máquinas Eléctricas',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Liderazgo',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo I',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo II',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo III',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo IV',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo I',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo II',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo III',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo IV',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo V',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo VI',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Módulo VII',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 1',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 2',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 3',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 4',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 5',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 6',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 7',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 8',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 9',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Topic::class)->create([
            'topic' => 'Libro 10',
            'unity_id' => '7'
        ]);
    }
}
