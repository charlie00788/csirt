<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Kardex;
use App\Entities\Person;
use App\Entities\Unity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Styde\Html\Facades\Alert;

class KardexController extends Controller
{
    public function kardex($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $kardexes = Kardex::selectRaw(
            'kardexes.id AS k_id, kardexes.person_id, kardexes.year, kardexes.course_id,
            kardexes.grade_id, kardexes.especialty_id,
            kardexes.active, people.*, grades.grade, especialties.especialty'
            )->join('people', 'kardexes.person_id', '=', 'people.id')
            ->join('grades', 'kardexes.grade_id', '=', 'grades.id')
            ->join('especialties', 'kardexes.especialty_id', '=', 'especialties.id')
            ->where('course_id', $id)
            ->where('active', true)
            ->orderBy('paterno')
            ->orderBy('materno')
            ->orderBy('nombres')
            ->paginate(30);

        $curso = Course::where('id', $id)->first();
        $unidad = Unity::where('id', $curso->unity_id)->first(); //para saber la unidad

        if($usuario->role == 'user'){
            if($unidad->id != $usuario->unity_id) abort('404');
        }

        return view('kardex.kardex', compact('usuario', 'person', 'kardexes', 'curso', 'unidad'));
    }

    public function buscarEstudiante($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $curso = Course::where('id', $id)->first();
        $unidad = Unity::where('id', $curso->unity_id)->first(); //para saber la unidad

        if($usuario->role == 'user'){
            if($unidad->id != $usuario->unity_id) abort('404');
        }

        return view('kardex.buscarEstudiante', compact(
            'usuario', 'person','curso',
            'unidad'
        ));

    }

    public function encontradoEstudiante(Request $request)
    {
        $usuario = Auth::user();

        if($usuario->role != 'user') abort('404');

        $rules = [
            'course_id' => 'required|numeric',
            'id'        => 'required|numeric|max:4294967295',
        ];

        $this->validate($request, $rules);

        $persona = Person::firstOrNew(['id' => $request->id]);
        if(is_null($persona->nombres)){
            $persona->nombres = '';
            $persona->city_id = 'LP';
            $persona->save();
        }

        return redirect()->route('nuevoKardex', ['ci' => $request->id, 'id' => $request->course_id]);
    }

    public function nuevoKardex($id, $ci)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $grados = DB::table('grades')->lists('grade', 'id');
        $especialidad = DB::table('especialties')->lists('especialty', 'id');
        $ciudad = DB::table('cities')->lists('city', 'id');
        $curso = Course::where('id', $id)->first();
        $unidad = Unity::where('id', $curso->unity_id)->first(); //para saber la unidad
        $estudiante = Person::where('id', $ci)->first();

        if($usuario->role == 'user'){
            if($unidad->id != $usuario->unity_id) abort('404');
        }

        return view('kardex.nuevoKardex', compact(
            'usuario', 'person', 'curso', 'estudiante',
            'unidad', 'grados', 'especialidad', 'ciudad'
        ));
    }

    public function guardarKardex(Request $request)
    {
        $usuario = Auth::user();

        $rules = [
            'course_id' => 'required|numeric',
            'id'        => 'required|numeric|max:4294967295',
            'paterno'   => 'max:255',
            'materno'   => 'max:255',
            'nombres'   => 'required|max:255',
            'city_id'   => 'required',
            'grade_id'  => 'required',
            'especialty_id' => 'required',
            'tin'       => 'numeric',
            'year'      => 'required|numeric'
        ];

        $this->validate($request, $rules);

        $persona = Person::findOrNew($request->id);
        $persona->id = $request->id;
        $persona->paterno = $request->paterno;
        $persona->materno = $request->materno;
        $persona->nombres = $request->nombres;
        if($request->tin == '') $persona->tin = null;
        else $persona->tin = $request->tin;
        $persona->city_id = $request->city_id;
        $persona->save();

        $kardex = new Kardex;
        $kardex->person_id = $request->id;
        $kardex->grade_id = $request->grade_id;
        $kardex->especialty_id = $request->especialty_id;
        $kardex->year = $request->year;
        $kardex->course_id = $request->course_id;
        $kardex->user_id = $usuario->id;
        $kardex->save();

        Alert::message('Estudiante con C.I.: ' . $request->id . ' creado exitósamente', 'success');

        return redirect()->route('kardex', $kardex->course_id);
    }

    public function borrarKardex($id)
    {
        $usuario = Auth::user();

        $kardex = Kardex::findOrFail($id);
        $kardex->active = false;
        $kardex->user_id = $usuario->id;
        $kardex->save();

        Alert::message('Estudiante con C.I.: ' . $kardex->person_id . ' borrado exitósamente', 'success');

        return redirect()->route('kardex', $kardex->course_id);
    }
}
