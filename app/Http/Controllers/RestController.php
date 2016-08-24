<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Unity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RestController extends Controller
{
    public function listarUnidades(Request $request)
    {
        if($request->ajax()){
            $unidades = Unity::where('active', true)
                ->select('id', 'unity')
                ->get();

            return $unidades;
        } else {
            abort(404);
        }
    }

    public function listarCursos(Request $request, $id)
    {
        if($request->ajax()){
            $cursos = Course::where('unity_id', $id)
                ->where('active', true)
                ->select('id', 'course')
                ->get();

            return $cursos;
        }else{
            abort(404);
        }
    }
}
