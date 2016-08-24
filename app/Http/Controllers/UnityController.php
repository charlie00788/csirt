<?php

namespace App\Http\Controllers;

use App\Entities\Unity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class UnityController extends Controller
{
    /**
     * Para mostrar las unidades activas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function unidades()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $unidades = Unity::where('active', true)->get();

        return view('unity.unidad', compact('usuario', 'person', 'unidades'));
    }

    /**
     * Para agregar una unidad
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function agregarUnidad()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->role != 'admin') abort('404');

        return view('unity.agregarUnidad', compact('usuario', 'person'));
    }

    /**
     * Para guardar la unidad
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function guardarUnidad(Request $request)
    {
        $rules = [
            'unity' => 'required|min:5|max:255'
        ];

        $this->validate($request, $rules);

        $unidad = new Unity;
        $unidad->unity = $request->unity;
        $unidad->save();

        Alert::message('Unidad de Formación: ' . $unidad->unity . ' creado exitósamente', 'success');

        return redirect()->route('unidad');
    }

    /**
     * Para editar una unidad
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editarUnidad($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->role != 'admin') abort('404');

        $unidad = Unity::findOrFail($id);

        return view('unity.editarUnidad', compact('usuario', 'person', 'unidad'));
    }

    /**
     * Para actualizar una unidad
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function actualizarUnidad(Request $request)
    {
        $usuario = Auth::user();
        if($usuario->role != 'admin') abort('404');

        $rules = [
            'unity' => 'required|min:5|max:255'
        ];

        $this->validate($request, $rules);

        $unidad = Unity::findOrFail($request->id);
        $unidad->unity = $request->unity;
        $unidad->save();

        Alert::message('Unidad de Formación: ' . $unidad->unity . ' actualizado exitósamente', 'success');

        return redirect()->route('unidad');
    }

    /**
     * Para deshabilitar una unidad pero no borrarlas del sistema
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function borrarUnidad($id)
    {
        $usuario = Auth::user();
        if($usuario->role != 'admin') abort('404');

        $unidad = Unity::findOrFail($id);
        $unidad->active = false;
        $unidad->save();

        Alert::message('Unidad de Formación: ' . $unidad->unity . ' elimanada exitósamente', 'success');

        return redirect()->route('unidad');
    }
}
