<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Record;
use App\Entities\Topic;
use App\Entities\Unity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Styde\Html\Facades\Alert;

class ReportesController extends Controller
{
    public function getBusquedaBajas()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->role != 'admin') abort('404');

        return view('reportes.buscarBaja', compact(
            'usuario', 'person'
        ));
    }

    public function postBusquedaBajas(Request $request)
    {
        $bajas_id = Topic::where('topic', 'ilike', 'baja')
            ->where('unity_id', $request->unity_id)
            ->first();

        if($bajas_id != null){
            $bajas_id = $bajas_id->id;

            $listaBajas = Record::selectRaw('grade, especialty, paterno, materno, nombres, topic, nota')
                ->join('kardexes', 'records.kardex_id', '=', 'kardexes.id')
                ->join('people', 'kardexes.person_id', '=', 'people.id')
                ->join('grades', 'kardexes.grade_id', '=', 'grades.id')
                ->join('topics', 'records.topic_id', '=', 'topics.id')
                ->join('especialties', 'kardexes.especialty_id', '=', 'especialties.id')
                ->where('topic_id', $bajas_id)
                ->where('unity_id', $request->unity_id)
                ->where('course_id', $request->course_id)
                ->where('records.active', true)
                ->get();

            $unidad = Unity::findOrFail($request->unity_id)->unity;
            $curso = Course::findOrFail($request->course_id)->course;

            //return view('reportes.reporteBaja', compact('listaBajas', 'unidad', 'curso'));
            return \PDF::loadView('reportes.reporteBaja', compact('listaBajas', 'unidad', 'curso'))
                ->download('certificado.pdf');
        } else {
            Alert::message('No exiten personas que hayan sido dados de baja en el curso o módulo
            correspondiente', 'danger');

            return redirect()->route('getBusquedaBajas');
        }
    }
}
