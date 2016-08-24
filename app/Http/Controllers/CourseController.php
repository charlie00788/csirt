<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Unity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class CourseController extends Controller
{
    /**
     * @param $id el id de la unidad
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function course($id)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        $idUnidad = Unity::where('id', $id)->first();       // para saber el id de unidad
        $unidad = $idUnidad->unity;                         // para el nombre de la unidad
        $cursos = Course::where('unity_id', $id)            // para saber los cursos de la unidad
                    ->where('active', true)
                    ->paginate(30);

        if($usuario->role == 'user'){
            if($idUnidad->id != $usuario->unity_id) abort('404');
        }

        return view('course.course', compact('usuario', 'person', 'cursos', 'unidad'));
    }


    /**
     * @param $id el id de la unidad donde se guardara
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function agregarCurso()
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        if($usuario->role != 'user') abort('404');

        return view('course.agregarCurso', compact('usuario', 'person', 'unity'));
    }

    public function guardarCurso(Request $request)
    {
        $usuario = Auth::user();        // para saber el usuario

        if($usuario->role != 'user') abort('404');

        $rules = [
            'course'      => 'required|min:5|max:255'
        ];

        $this->validate($request, $rules);

        $curso = new Course;
        $curso->course = $request->course;
        $curso->unity_id = $usuario->unity_id;
        $curso->save();

        Alert::message('Curso o Módulo: ' . $curso->course . ' creado exitósamente', 'success');

        return redirect()->route('course', $curso->unity_id);
    }

    public function editarCurso($id)
    {
        $usuario = Auth::user();        // para saber el usuario
        $person = $usuario->person;     // para los nombres

        if($usuario->role != 'user') abort('404');

        $curso = Course::findOrFail($id);

        return view('course.editarCurso', compact('usuario', 'person', 'curso'));
    }

    public function actualizarCurso(Request $request)
    {
        $usuario = Auth::user();        // para saber el usuario

        if($usuario->role != 'user') abort('404');

        $rules = [
            'course'      => 'required|min:5|max:255'
        ];

        $this->validate($request, $rules);

        $curso = Course::findOrFail($request->id);
        $curso->course = $request->course;
        $curso->save();

        Alert::message('Curso o Módulo: ' . $curso->course . ' actualizado exitósamente', 'success');

        return redirect()->route('course', $curso->unity_id);
    }

    public function borrarCurso($id)
    {
        $usuario = Auth::user();        // para saber el usuario

        if($usuario->role != 'user') abort('404');

        $curso = Course::findOrFail($id);
        $curso->active = false;
        $curso->save();

        Alert::message('Curso o Módulo: ' . $curso->course . ' eliminado exitósamente', 'success');

        return redirect()->route('course', $curso->unity_id);
    }
}

