<?php

namespace App\Http\Controllers;

use App\Entities\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        $person = $usuario->person;


        return view('home.supervisor', compact('person', 'usuario'));
    }

    public function cambiarPassword()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        return view('auth.cambiarPassword', compact('usuario', 'person'));
    }

    public function cambiadoPassword(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->id != $request->id) abort('404');
        $rules = [
            'id'        => 'required',
            'password'  => 'required|confirmed|min:6',
        ];

        $this->validate($request, $rules);
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        Alert::message('Contraseña cambiada exitósamente', 'success');

        return view('auth.cambiarPassword', compact('usuario', 'person'));
    }

    public function getPlanificacion()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        return view('home.planificacion', compact('usuario', 'person'));
    }

    public function getRiesgosInherentes()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.riesgosinherentes', compact('usuario', 'person', 'planes'));
    }

    public function postRiesgosInherentes(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'pl1' => 'required',
            'pl2' => 'required',
            'pl3' => 'required',
            'pl4' => 'required',
        ];

        $this->validate($request, $rules);

        $pl = Plan::findOrFail('pl1')->update(['estado' => $request->pl1]);
        $pl = Plan::findOrFail('pl2')->update(['estado' => $request->pl2]);
        $pl = Plan::findOrFail('pl3')->update(['estado' => $request->pl3]);
        $pl = Plan::findOrFail('pl4')->update(['estado' => $request->pl4]);

        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getPlanificacion');
    }

    public function getDefinirPersonal()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.definirPersonal', compact('usuario', 'person', 'planes'));
    }

    public function postDefinirPersonal(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'dp1' => 'required',
            'dp2' => 'required',
            'dp3' => 'required',
        ];

        $this->validate($request, $rules);

        $pl = Plan::findOrFail('dp1')->update(['estado' => $request->dp1]);
        $pl = Plan::findOrFail('dp2')->update(['estado' => $request->dp2]);
        $pl = Plan::findOrFail('dp3')->update(['estado' => $request->dp3]);

        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getPlanificacion');
    }

    public function getProgramacionPruebas()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.programacionPruebas', compact('usuario', 'person', 'planes'));
    }

    public function postProgramacionPruebas(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'pp1' => 'required|date|after:'.Carbon::yesterday()->format('d-m-Y'),
            'pp2' => 'required|date|after:'.Carbon::yesterday()->format('d-m-Y'),
        ];

        $this->validate($request, $rules);

        $pl = Plan::findOrFail('pp1')->update(['estado' => $request->pp1]);
        $pl = Plan::findOrFail('pp2')->update(['estado' => $request->pp2]);


        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getPlanificacion');
    }

    public function getLugaresPenetracion()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.lugaresPenetracion', compact('usuario', 'person', 'planes'));
    }

    public function postLugaresPenetracion(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'lp1' => 'required|numeric|min:0|max:10',
            'lp2' => 'required|numeric|min:0|max:10',
            'lp3' => 'required|numeric|min:0|max:10',
            'lp4' => 'required|numeric|min:0|max:10',
            'lp5' => 'required|numeric|min:0|max:10',
            'lp6' => 'required|numeric|min:0|max:10',
        ];

        $this->validate($request, $rules);

        Plan::findOrFail('lp1')->update(['estado' => $request->lp1]);
        Plan::findOrFail('lp2')->update(['estado' => $request->lp2]);
        Plan::findOrFail('lp3')->update(['estado' => $request->lp3]);
        Plan::findOrFail('lp4')->update(['estado' => $request->lp4]);
        Plan::findOrFail('lp5')->update(['estado' => $request->lp5]);
        Plan::findOrFail('lp6')->update(['estado' => $request->lp6]);

        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getPlanificacion');
    }

    public function getNivelesAcceso()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.nivelesAcceso', compact('usuario', 'person', 'planes'));
    }

    public function postNivelesAcceso(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'na1' => 'required',
        ];

        $this->validate($request, $rules);

        $pl = Plan::findOrFail('na1')->update(['estado' => $request->na1]);

        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getPlanificacion');
    }

    public function getCumplimientoPoliticas()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.cumplimientoPoliticas', compact('usuario', 'person', 'planes'));
    }

    public function postCumplimientoPoliticas(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'cp1' => 'required',
        ];

        $this->validate($request, $rules);

        Plan::findOrFail('cp1')->update(['estado' => $request->cp1]);

        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getPlanificacion');
    }

    public function getEscaneo()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.escaneos', compact('usuario', 'person', 'planes'));
    }

    public function postEscaneo(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'es1' => 'required',
        ];

        $this->validate($request, $rules);

        Plan::findOrFail('es1')->update(['estado' => $request->es1]);

        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getDescubrimiento');
    }

    public function getDescubrimiento()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        return view('home.descubrimiento', compact('usuario', 'person'));
    }

    public function getVulnerabilidades()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.vulnerabilidades', compact('usuario', 'person', 'planes'));
    }

    public function postVulnerabilidades(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'vu1' => 'required',
        ];

        $this->validate($request, $rules);

        Plan::findOrFail('vu1')->update(['estado' => $request->vu1]);
        $po =

        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getDescubrimiento');
    }

    public function getAtaques()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.ataque', compact('usuario', 'person', 'planes'));
    }

    public function getAgregarAtaque()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::where('id', 'nv1')->first();

        return view('home.agregarVulnerabilidad', compact('usuario', 'person', 'planes'));
    }

    public function postAgregarAtaque(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $rules = [
            'nv1' => 'required',
        ];

        $this->validate($request, $rules);

        Plan::findOrFail('nv1')->update(['estado' => $request->nv1]);

        Alert::message('Registros actualizados exitósamente', 'success');

        return redirect()->route('getAtaques');
    }

    public function getReporte()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.reporte', compact('usuario', 'person', 'planes'));
    }

    public function getVariables()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();
        $p1 = Plan::find('lp1')->estado;
        $p2 = Plan::find('lp2')->estado;
        $p3 = Plan::find('lp3')->estado;
        $p4 = Plan::find('lp4')->estado;
        $p5 = Plan::find('lp5')->estado;
        $p6 = Plan::find('lp6')->estado;
        $totalPc = $p1 + $p2 + $p3 + $p4 + $p5 + $p6;

        return view('home.variables', compact('usuario', 'person', 'planes', 'totalPc'));
    }

    public function getSugerencia()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $planes = Plan::all();

        return view('home.sugerencias', compact('usuario', 'person', 'planes'));
    }

    public function postSugerencia(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        Alert::message('Sugerencia actualizada!', 'success');

        return view('home.reporte', compact('usuario', 'person', 'planes'));
    }

    public function getMision()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        return view('home.mision', compact('usuario', 'person'));
    }

    public function getVision()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        return view('home.mision', compact('usuario', 'person'));
    }

    public function getNotificacion()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        return view('home.notificaiones', compact('usuario', 'person'));
    }

    public function getHistorial()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        return view('home.historial', compact('usuario', 'person'));
    }
}
