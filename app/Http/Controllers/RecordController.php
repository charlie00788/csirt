<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Kardex;
use App\Entities\Record;
use App\Entities\Unity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Styde\Html\Facades\Alert;

class RecordController extends Controller
{
    public function record($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $notas = Record::where('kardex_id', $id)
                ->where('active', true)
                ->paginate(20);

        $kardex = Kardex::where('id', $id)->first();
        $curso = Course::where('id', $kardex->course_id)->first();
        $unidad = Unity::where('id', $curso->unity_id)->first(); //para saber la unidad

        if($usuario->role == 'user') if($unidad->id != $usuario->unity_id) abort('404');

        return view('record.record', compact('usuario', 'person', 'notas', 'curso', 'unidad', 'kardex'));
    }

    public function nuevoRegistro($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $kardex = Kardex::findOrFail($id);
        $curso = Course::findOrFail($kardex->course_id);
        if($usuario->role == 'user') if($curso->unity_id != $usuario->unity_id) abort('404');

        $topics = DB::table('topics')
                ->where('unity_id', $curso->unity_id)
                ->where('active', true)
                ->lists('topic', 'id');

        return view('record.nuevoRegistro', compact(
            'usuario', 'person', 'kardex',
            'curso', 'topics'
        ));
    }

    public function guardarRegistro(Request $request)
    {
        $usuario = Auth::user();

        if($usuario->role != 'user') abort('404');

        $rules = [
            'topic_id'  => 'required',
            'nota'      => 'required|max:100'
        ];

        $this->validate($request, $rules);

        $registro = new Record;
        $registro->kardex_id = $request->kardex_id;
        $registro->topic_id = $request->topic_id;
        $registro->nota = $request->nota;
        $registro->user_id = $usuario->id;
        $registro->save();

        Alert::message('Materia o Periodo: ' . $registro->topic->topic . ' guardado exitósamente', 'success');

        return redirect()->route('record', $registro->kardex_id);
    }

    public function borrarRegistro($id)
    {
        $usuario = Auth::user();

        if($usuario->role != 'user') abort('404');

        $registro = Record::findOrFail($id);
        $registro->active = false;
        $registro->user_id = $usuario->id;
        $registro->save();

        Alert::message('Materia o Periodo: ' . $registro->topic->topic . ' borrado exitósamente', 'success');

        return redirect()->route('record', $registro->kardex_id);
    }
}
