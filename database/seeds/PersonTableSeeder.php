<?php

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUserCharlie();
//        $this->createAdmin();
//        $this->createSupervisor();
//        $this->createGestion(2);
    }

    /**
     * Para crear al usuario Charlie osea yo
     */
    private function createUserCharlie()
    {
        factory(\App\Entities\User::class)->create([
            'id'    => '100',
            'role'   => 'admin',
            'email' => 'palenque@hotmail.com',
            'password'  => bcrypt('123456'),
            'unity_id'  => '1'
        ]);

        factory(\App\Entities\Person::class)->create([
            'id'        => '100',
            'tin'       => '100',
            'paterno'   => 'Palenque',
            'materno'   => 'Rios',
            'nombres'   => 'Erick',
            'city_id'   => 'LP'
        ]);
    }

    /**
     * Para crear al administrador del Dpto. VI
     */
    private function createAdmin()
    {
        factory(\App\Entities\User::class)->create([
            'id'    => '300',
            'role'   => 'admin',
            'unity_id'  => '1'
        ]);

        factory(\App\Entities\Person::class)->create([
            'id'        => '300',
        ]);
    }

    /**
     * Para crear a un supervisor osea al encargado de las certificaciones
     */
    private function createSupervisor()
    {
        factory(\App\Entities\User::class)->create([
            'id'    => '400',
            'role'   => 'supervisor',
            'unity_id'  => '1'
        ]);

        factory(\App\Entities\Person::class)->create([
            'id'        => '400',
            'paterno'   => 'Miranda',
            'materno'   => 'Guzmán',
            'nombres'   => 'Jorge René',
        ]);
    }

    /*
     * para crear las unidad
     *
     * @return el idPersona actual
     */
    private function createUnidad($unidad, $estudiante, $numCargo, $idGestion, $numKardex)
    {
        switch($unidad){
            case 2:
                $inicioMateria = 1;
                $todasMaterias = 6;
                $inicioCurso = 1;
                $todosCursos = 4;
                break;
            case 3:
                $inicioMateria = 7;
                $todasMaterias = 10;
                $inicioCurso = 5;
                $todosCursos = 8;
                break;
            case 4:
                $inicioMateria = 11;
                $todasMaterias = 14;
                $inicioCurso = 9;
                $todosCursos = 13;
                break;
            case 5:
                $inicioMateria = 15;
                $todasMaterias = 18;
                $inicioCurso = 14;
                $todosCursos = 18;
                break;
            case 6:
                $inicioMateria = 19;
                $todasMaterias = 25;
                $inicioCurso = 19;
                $todosCursos = 22;
                break;
            case 7:
                $inicioMateria = 26;
                $todasMaterias = 35;
                $inicioCurso = 23;
                $todosCursos = 32;
                break;
            default:
                $inicioMateria = 0;
                $todasMaterias = 0;
                $inicioCurso = 0;
                $todosCursos = 0;
        }

        $todasPersonas = mt_rand(50, 100);  // para saber cuantas personas hare por unidad
        $idCargo = $numCargo;               // para el numero de cargo que llevamos
        $gestion = $idGestion;              // para saber en gestion estoy
        $totalPersonas = $todasPersonas + $estudiante;
        $kardex = $numKardex;               // para signar el kardex que le toca

        for($idPersona = $estudiante; $idPersona <= $totalPersonas; $idPersona++){
            print "\nCreando persona: " . $idPersona;
            factory(\App\Entities\Person::class)->create([      // creamos a la persona
                'id'    => $idPersona
            ]);
            for($idCurso = $inicioCurso; $idCurso <= $todosCursos; $idCurso++, $kardex++){
                print "\nCreando curso: " . $idCurso . " para el kardex: " . $kardex . " de la persona: " . $idPersona;
                factory(\App\Entities\Kardex::class)->create([      // para crear los kardexes
                    'person_id' => $idPersona,
                    'year'      => $gestion,
                    'course_id' => $idCurso
                ]);
                for($idMateria = $inicioMateria; $idMateria <= $todasMaterias; $idMateria++){
                    print "\nCreando la materia: " . $idMateria . " para el curso: " . $idCurso;
                    factory(\App\Entities\Record::class)->create([  // para crear los registros
                        'kardex_id' => $kardex,
                        'topic_id'  => $idMateria
                    ]);
                }
                print "\nCreando documento para el kardex: " . $kardex;
                factory(\App\Entities\Document::class)->create([    //para crear un documento
                    'cargo1_id'  => ($idCargo * 3) - 2,
                    'cargo2_id'  => ($idCargo * 3) - 1,
                    'cargo3_id'  => $idCargo * 3,
                    'kardex_id' => $kardex,
                    'year'      => $gestion,
                ]);
            }
        }

        return [$idPersona, $kardex];    // para retornar el siguiente carnet habil
    }

    /*
     * Para crear cada gestion
     */
    private function createGestion($gestiones)
    {
        $idPersona = 1000;      // a partir de aca comienza un ci
        $idNumKardex = 1;       // a partir de este numero comienza un kardex
        $gestionInicial = 2016;
        $gestionFinal = $gestionInicial - $gestiones;
        for($gestion = $gestionInicial, $idCargo = 1; $gestion > $gestionFinal  ; $gestion--, $idCargo++) { //cuantas gestiones
            print "\nCreando gestión: ". $gestion;
            print "\nCreando cargo de la gestion: ". $gestion;
            factory(\App\Entities\Person::class)->create([
                'id'        => $gestion.$gestion.'1',
            ]);
            factory(\App\Entities\Cargo::class)->create([   // para crear un cargo con un numero
                'year' => $gestion,
                'cargo' => 'eva',
                'person_id' => $gestion.$gestion.'1'
            ]);
            factory(\App\Entities\Person::class)->create([
                'id'        => $gestion.$gestion.'2',
            ]);
            factory(\App\Entities\Cargo::class)->create([   // para crear un cargo con un numero
                'year' => $gestion,
                'cargo' => 'ins',
                'person_id' => $gestion.$gestion.'2'
            ]);
            factory(\App\Entities\Person::class)->create([
                'id'        => $gestion.$gestion.'3',
            ]);
            factory(\App\Entities\Cargo::class)->create([   // para crear un cargo con un numero
                'year' => $gestion,
                'cargo' => 'dep',
                'person_id' => $gestion.$gestion.'3'
            ]);
            for ($unidad = 2; $unidad <= 7; $unidad++) {  // para las unidad
                print "\nCreando unidad: " . $unidad;
                list($idPersona, $idNumKardex) = $this->createUnidad($unidad, $idPersona, $idCargo, $gestion, $idNumKardex);
            }
        }
        print "\n";
    }
}
