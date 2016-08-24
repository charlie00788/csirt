<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCourse();
    }

    private function createCourse()
    {
        factory(\App\Entities\Course::class)->create([
            'course' => 'Promoción 1990',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'Promoción 1993',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'Promoción 1991',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'Promoción 1992',
            'unity_id' => '2'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'Promoción 1990',
            'unity_id' => '3'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'Promoción 1993',
            'unity_id' => '3'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'Promoción 1991',
            'unity_id' => '3'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'Promoción 1992',
            'unity_id' => '3'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'I Curso de Aplicación Naval',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'II Curso de Aplicación Naval',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'III Curso de Aplicación Naval',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'IV Curso de Aplicación Naval',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'V Curso de Aplicación Naval',
            'unity_id' => '4'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'I Escuela de Estado Mayor Naval',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'II Escuela de Estado Mayor Naval',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'III Escuela de Estado Mayor Naval',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'IV Curso de Escuela de Estado Mayor Naval',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'V Curso de Escuela de Estado Mayor Naval',
            'unity_id' => '5'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'I Curso de Agentes de Mar',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'II Curso de Agentes de Mar',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'III Curso de Agentes de Mar',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'IV Curso de Agentes de Mar',
            'unity_id' => '6'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'I Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'II Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'III Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'IV Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'V Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'VI Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'VII Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'VII Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'IX Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);

        factory(\App\Entities\Course::class)->create([
            'course' => 'X Curso de Hablantes en Inglés',
            'unity_id' => '7'
        ]);
    }
}
