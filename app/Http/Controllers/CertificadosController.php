<?php

namespace App\Http\Controllers;

use App\Entities\Cargo;
use App\Entities\Document;
use App\Entities\Kardex;
use App\Entities\Person;
use App\Entities\Record;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Styde\Html\Facades\Alert;

class CertificadosController extends Controller
{
    public function buscarEgresado()
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        return view('certificados.buscarEgresado', compact('usuario', 'person'));
    }

    public function encontradoEgresado(Request $request)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        $rules = [
            'id'  => 'required|numeric|max:4294967295',
        ];

        $this->validate($request, $rules);

        $kardexes = Kardex::where('person_id', $request->id)
                    ->where('active', true)
                    ->orderBy('year', 'ASC')
                    ->get();

        return view('certificados.kardexEgresado', compact('usuario', 'person', 'kardexes'));
    }

    public function nuevoCertificadoEgreso($id)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        if($usuario->role != 'supervisor') abort('404');

        $hoy = getdate();
        $cargos = Cargo::where('year', $hoy['year'])
                ->where('active', true)
                ->get();

        if($cargos->count() == 3){
            foreach($cargos as $cargo){
                if($cargo->cargo == 'eva') $cargo1 = $cargo->id;
                if($cargo->cargo == 'ins') $cargo2 = $cargo->id;
                if($cargo->cargo == 'dep') $cargo3 = $cargo->id;
            }
        }else{
            Alert::message('No existen los cargos para la Gestión: ' . $hoy['year'] . ', por favor indique al administrador', 'danger');
            return redirect()->route('record', $id);
        }

        $kardex = Kardex::findOrFail($id);
        $numero = Document::where('year', $hoy['year'])->max('numero');
        if($numero == null) $numero = 0;

        $nuevoDocumento = new Document;
        $nuevoDocumento->cargo1_id = $cargo1;
        $nuevoDocumento->cargo2_id = $cargo2;
        $nuevoDocumento->cargo3_id = $cargo3;
        $nuevoDocumento->kardex_id = $kardex->id;
        $nuevoDocumento->dia = $hoy['mday'];
        $nuevoDocumento->month_id = $hoy['mon'];
        $nuevoDocumento->year = $hoy['year'];
        $numero = $numero + 1;
        $nuevoDocumento->numero =$numero;
        $nuevoDocumento->user_id = $usuario->id;
        $nuevoDocumento->save();

        $registros = Record::where('kardex_id', $id)
                    ->where('active', true)
                    ->get();

        if($registros->count() == 0){
            Alert::message('No existen los notas para imprimir', 'danger');
            return redirect()->route('record', $id);
        }

//        return view('certificados.certificadoEgreso', compact(
//            'usuario', 'person', 'kardex', 'hoy', 'nuevoDocumento', 'registros'));
        return \PDF::loadView('certificados.certificadoEgreso', compact(
            'usuario', 'person', 'kardex', 'hoy', 'nuevoDocumento', 'registros'
        ))->download('certificado.pdf');
    }

    //*********************** desde aca comienzan los aspirantes ****************************

    public function buscarAspirante()
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        return view('certificados.buscarAspirante', compact('usuario', 'person'));
    }

    public function buscarAspiranteApellidos()
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        return view('certificados.buscarAspiranteApellidos', compact('usuario', 'person'));
    }

    public function encontradoAspirante(Request $request)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        $rules = [
            'id'  => 'required|numeric|max:4294967295',
        ];

        $this->validate($request, $rules);

        $aspirante = $request->id;
        $kardexes = Kardex::where('person_id', $request->id)
            ->where('active', true)
            ->orderBy('year', 'ASC')
            ->get();

        if($kardexes->count() == 0) $existe = false;
        else $existe = true;

        return view('certificados.kardexAspirante', compact(
            'usuario', 'person', 'kardexes', 'existe', 'aspirante'
        ));
    }

    public function encontradoAspiranteApellidos(Request $request)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        $rules = [
            'paterno'  => 'max:255',
            'materno'  => 'max:255'
        ];

        $this->validate($request, $rules);

        $paterno = $request->paterno;
        $materno = $request->materno;

        $aspirante = 0;
        $kardexes = Kardex::selectRaw(
            'kardexes.id AS k_id, kardexes.person_id, kardexes.year, kardexes.course_id,
            kardexes.grade_id, kardexes.especialty_id,
            kardexes.active, people.*, grades.grade, especialties.especialty'
            )->join('people', 'kardexes.person_id', '=', 'people.id')
            ->join('grades', 'kardexes.grade_id', '=', 'grades.id')
            ->join('especialties', 'kardexes.especialty_id', '=', 'especialties.id')
            ->where('people.paterno', 'ilike', $paterno.'%')
            ->where('people.materno', 'ilike', $materno.'%')
            ->where('active', true)
            ->orderBy('paterno')
            ->orderBy('materno')
            ->orderBy('nombres')
            ->get();

        if($kardexes->count() == 0) $existe = false;
        else $existe = true;

        if($existe){
            return view('certificados.kardexAspiranteApellidos', compact(
                'usuario', 'person', 'kardexes', 'aspirante'
            ));
        }else{
            return redirect()->route('getBusquedaAspiranteApellidos');
        }
    }

    public function nuevoCertificadoAspirante($id)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        if($usuario->role != 'supervisor') abort('404');

        $hoy = getdate();
        $cargos = Cargo::where('year', $hoy['year'])
            ->where('active', true)
            ->get();

        if($cargos->count() == 3){
            foreach($cargos as $cargo){
                if($cargo->cargo == 'eva') $cargo1 = $cargo->id;
                if($cargo->cargo == 'ins') $cargo2 = $cargo->id;
                if($cargo->cargo == 'dep') $cargo3 = $cargo->id;
            }
        }else{
            Alert::message('No existen los cargos para la Gestión: ' . $hoy['year'] . ', por favor indique al administrador', 'danger');
            return redirect()->route('record', $id);
        }

        $kardex = Kardex::findOrFail($id);
        $numero = Document::where('year', $hoy['year'])->max('numero');
        if($numero == null) $numero = 0;

        $nuevoDocumento = new Document;
        $nuevoDocumento->cargo1_id = $cargo1;
        $nuevoDocumento->cargo2_id = $cargo2;
        $nuevoDocumento->cargo3_id = $cargo3;
        $nuevoDocumento->kardex_id = $kardex->id;
        $nuevoDocumento->dia = $hoy['mday'];
        $nuevoDocumento->month_id = $hoy['mon'];
        $nuevoDocumento->year = $hoy['year'];
        $numero = $numero + 1;
        $nuevoDocumento->numero =$numero;
        $nuevoDocumento->user_id = $usuario->id;
        $nuevoDocumento->save();


        return \PDF::loadView('certificados.certificadoAspirante', compact(
            'usuario', 'person', 'kardex', 'hoy',
            'cargo1', 'cargo2', 'cargo3', 'numero'
        ))->stream('certificado.pdf');
    }

    public function nuevoCertificadoAspiranteNada(Request $request)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        if($usuario->role != 'supervisor') abort('404');

        $aspirante = Person::where('id', $request->id)->first();
        $aspirante->city_id = $request->city_id;
        $aspirante->paterno = $request->paterno;
        $aspirante->materno = $request->materno;
        $aspirante->nombres = $request->nombres;
        $aspirante->save();

        $hoy = getdate();
        $cargos = Cargo::where('year', $hoy['year'])
            ->where('active', true)
            ->get();

        if($cargos->count() == 3){
            foreach($cargos as $cargo){
                if($cargo->cargo == 'eva') $cargo1 = $cargo->id;
                if($cargo->cargo == 'ins') $cargo2 = $cargo->id;
                if($cargo->cargo == 'dep') $cargo3 = $cargo->id;
            }
        }else{
            Alert::message('No existen los cargos para la Gestión: ' . $hoy['year'] . ', por favor indique al administrador', 'danger');
            return redirect()->route('buscarAspirante', compact('usuario', 'person'));
        }

        $numero = Document::where('year', $hoy['year'])->max('numero');
        if($numero == null) $numero = 0;

        $nuevoDocumento = new Document;
        $nuevoDocumento->cargo1_id = $cargo1;
        $nuevoDocumento->cargo2_id = $cargo2;
        $nuevoDocumento->cargo3_id = $cargo3;
        $nuevoDocumento->kardex_id = 1;
        $nuevoDocumento->dia = $hoy['mday'];
        $nuevoDocumento->month_id = $hoy['mon'];
        $nuevoDocumento->year = $hoy['year'];
        $numero = $numero + 1;
        $nuevoDocumento->numero = $numero;
        $nuevoDocumento->user_id = $usuario->id;
        $nuevoDocumento->save();

//        return view('certificados.certificadoAspiranteNada', compact(
//            'usuario', 'person', 'aspirante', 'nuevoDocumento'));
        return \PDF::loadView('certificados.certificadoAspiranteNada', compact(
            'usuario', 'person', 'aspirante', 'nuevoDocumento'
        ))->download('certificado.pdf');
    }

    public function busquedaAspirante($id)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        if($usuario->role != 'supervisor') abort('404');

        $aspirante = Person::findOrNew($id);
        if(is_null($aspirante->nombres)){
            $aspirante->id = $id;
            $aspirante->nombres = '';
            $aspirante->city_id = 'CB';
            $aspirante->tin = null;
            $aspirante->save();
        }

        $ciudad = DB::table('cities')->lists('city', 'id');
        $aspirante = Person::findOrFail($id);

        return view('certificados.nuevoAspirante', compact('usuario', 'person', 'aspirante', 'ciudad'));
    }

    public function getBusquedaAspiranteApellidos()
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        if($usuario->role != 'supervisor') abort('404');

        return view('certificados.nuevoAspiranteApellidos', compact(
            'usuario', 'person'
        ));
    }
    public function postBusquedaAspiranteApellidos(Request $request)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        if($usuario->role != 'supervisor') abort('404');

        $rules = [
            'id'        => 'required|numeric|max:4294967295|unique:people',
        ];

        $this->validate($request, $rules);

        $aspirante = Person::findOrNew($request->id);
        if(is_null($aspirante->nombres)){
            $aspirante->id = $request->id;
            $aspirante->nombres = '';
            $aspirante->city_id = 'CB';
            $aspirante->tin = null;
            $aspirante->save();
        }

        $ciudad = DB::table('cities')->lists('city', 'id');
        $aspirante = Person::findOrFail($request->id);

        return view('certificados.nuevoAspirante', compact('usuario', 'person', 'aspirante', 'ciudad'));
    }
}
