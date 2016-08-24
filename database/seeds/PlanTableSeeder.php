<?php

use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //planificacion
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'pl1',
            'descripcion'   => 'Acceso no autorizado',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'pl2',
            'descripcion'   => 'Código malicisioso',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'pl3',
            'descripcion'   => 'Denegación de servicios',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'pl4',
            'descripcion'   => 'Mal uso de recursos tecnológicos',
        ]);

        //definir personal
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'dp1',
            'descripcion'   => 'Oficial de Seguridad',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'dp2',
            'descripcion'   => 'Departamento de Tecnologías de la Información',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'dp3',
            'descripcion'   => 'Departamento de Asistencia Técnica',
        ]);

        //programacion pruebas
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'pp1',
            'descripcion'   => 'Fecha de Inicio de la Prueba',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'pp2',
            'descripcion'   => 'Fecha de Finalización de la Prueba',
        ]);

        //lugares para la peneatracion
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'lp1',
            'descripcion'   => 'Departamentos de Carrera',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'lp2',
            'descripcion'   => 'Tesorería',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'lp3',
            'descripcion'   => 'Cajas',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'lp4',
            'descripcion'   => 'Secretaría Académica',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'lp5',
            'descripcion'   => 'DNI',
        ]);
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'lp6',
            'descripcion'   => 'DARE',
        ]);

        //NIveles de cceso
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'na1',
            'descripcion'   => 'Niveles de Acceso',
        ]);

        //cumplimineto de polticas
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'cp1',
            'descripcion'   => 'Cumplimiento de Políticas',
        ]);

        //escaneo
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'es1',
            'descripcion'   => 'Escaneos',
        ]);

        //vulnerabilidades
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'vu1',
            'descripcion'   => 'Vulnerabilidades',
        ]);

        //nueva vul
        factory(\App\Entities\Plan::class)->create([
            'id'            => 'nv1',
            'descripcion'   => 'Nueva Vulnerabilidad',
        ]);
    }
}
