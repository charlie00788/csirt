<?php

namespace App\Http\Controllers;

use App\Entities\Cargo;
use App\Entities\Person;
use App\Entities\Unity;
use App\Entities\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Styde\Html\Facades\Alert;

class UserController extends Controller
{
    public function user($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $unidad = Unity::where('id', $id)->first();
        $users = User::where('unity_id', $id)->get();

        return view('user.user', compact('usuario', 'person', 'users', 'unidad'));
    }

    public function cargo()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $cargos = Cargo::orderBy('year', 'DESC')
                ->paginate(30);

        return view('user.cargo', compact('usuario', 'person', 'cargos'));
    }

    public function usuarios()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->role != 'admin') abort('404');

        $usuarios = User::orderBy('role', 'DESC')
                    ->orderBy('unity_id', 'DESC')
                    ->paginate(30);

        return view('user.usuarios', compact('usuario', 'person', 'usuarios'));
    }

    public function editarUsuario($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->role != 'admin') abort('404');

        $user = User::findOrFail($id);
        $persona = Person::findOrFail($id);
        $grados = DB::table('grades')->lists('grade', 'id');
        $especialidad = DB::table('especialties')->lists('especialty', 'id');
        $ciudad = DB::table('cities')->lists('city', 'id');
        $unidad = DB::table('unities')->lists('unity', 'id');
        $id_viejo = $id;
        $email_viejo = $user->email;

        return view('user.editarUsuario', compact(
            'usuario', 'person',
            'user', 'grados',
            'especialidad', 'ciudad',
            'unidad', 'persona', 'id_viejo', 'email_viejo'
        ));
    }

    public function guardarUsuario(Request $request)
    {
        $usuario = Auth::user();

        if($usuario->role != 'admin') abort('404');

        $rules = [
            'id'        => 'required|numeric|max:4294967295|unique:users,id',
            'paterno'   => 'required|max:255',
            'materno'   => 'required|max:255',
            'nombres'   => 'required|max:255',
            'email'     => 'required|unique:users,email',
            'city_id'   => 'required',
            'grade_id'  => 'required',
            'especialty_id' => 'required'
        ];

        $this->validate($request, $rules);

        $user = new User;
        $user->id = $request->id;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->unity_id = $request->unity_id;
        $user->grade_id = $request->grade_id;
        $user->especialty_id = $request->especialty_id;
        $user->active = true;
        $user->password = bcrypt('sexta');
        $user->save();

        $persona = Person::findOrNew($request->id);
        $persona->id = $request->id;
        $persona->paterno = $request->paterno;
        $persona->materno = $request->materno;
        $persona->nombres = $request->nombres;
        $persona->city_id = $request->city_id;
        $persona->save();

        Alert::message('Usuario: ' . $request->id . ' creado exitósamente', 'success');

        return redirect()->route('usuarios');
    }

    public function desactivarUsuario($id)
    {
        $usuario = Auth::user();

        if($usuario->role != 'admin') abort('404');

        $user = User::findOrFail($id);
        $user->active = false;
        $user->save();

        Alert::message('Usuario: ' . $id . ' desactivado exitósamente', 'success');

        return redirect()->route('usuarios');
    }

    public function activarUsuario($id)
    {
        $usuario = Auth::user();

        if($usuario->role != 'admin') abort('404');

        $user = User::findOrFail($id);
        $user->active = true;
        $user->save();

        Alert::message('Usuario: ' . $id . ' activado exitósamente', 'success');

        return redirect()->route('usuarios');
    }

    public function nuevoUsuario()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->role != 'admin') abort('404');

        $grados = DB::table('grades')->lists('grade', 'id');
        $especialidad = DB::table('especialties')->lists('especialty', 'id');
        $ciudad = DB::table('cities')->lists('city', 'id');
        $unidad = DB::table('unities')->where('active', true)->lists('unity', 'id');

        return view('user.nuevoUsuario', compact(
            'usuario', 'person',
            'unidad', 'grados',
            'especialidad', 'ciudad'
        ));
    }

    public function actualizarUsuario(Request $request)
    {
        $usuario = Auth::user();

        if($usuario->role != 'admin') abort('404');

        if($request->id_viejo == $request->id){
            if($request->email_viejo == $request->email){
                $rules = [
                    'id'        => 'required|numeric|max:4294967295',
                    'paterno'   => 'required|max:255',
                    'materno'   => 'required|max:255',
                    'nombres'   => 'required|max:255',
                    'email'     => 'required',
                    'city_id'   => 'required',
                    'grade_id'  => 'required',
                    'especialty_id' => 'required'
                ];
            }else{
                $rules = [
                    'id'        => 'required|numeric|max:4294967295',
                    'paterno'   => 'required|max:255',
                    'materno'   => 'required|max:255',
                    'nombres'   => 'required|max:255',
                    'email'     => 'required|unique:users,email',
                    'city_id'   => 'required',
                    'grade_id'  => 'required',
                    'especialty_id' => 'required'
                ];
            }
        }else{
            if($request->email_viejo == $request->email){
                $rules = [
                    'id'        => 'required|numeric|max:4294967295|unique:users,id',
                    'paterno'   => 'required|max:255',
                    'materno'   => 'required|max:255',
                    'nombres'   => 'required|max:255',
                    'email'     => 'required',
                    'city_id'   => 'required',
                    'grade_id'  => 'required',
                    'especialty_id' => 'required'
                ];
            }else{
                $rules = [
                    'id'        => 'required|numeric|max:4294967295|unique:users,id',
                    'paterno'   => 'required|max:255',
                    'materno'   => 'required|max:255',
                    'nombres'   => 'required|max:255',
                    'email'     => 'required|unique:users,email',
                    'city_id'   => 'required',
                    'grade_id'  => 'required',
                    'especialty_id' => 'required'
                ];
            }
        }

        $this->validate($request, $rules);

        if($request->id_viejo == $request->id){
            $user = User::findOrFail($request->id);
        }else{
            $user_viejo = User::findOrFail($request->id_viejo);
            $pass = $user_viejo->password;
            $user_viejo->delete();
            $user = new User;
            $user->password = $pass;
        }
        $user->id = $request->id;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->unity_id = $request->unity_id;
        $user->grade_id = $request->grade_id;
        $user->especialty_id = $request->especialty_id;
        $user->active = true;
        $user->save();

        if($request->id_viejo == $request->id){
            $persona = Person::findOrFail($request->id);
        }else{
            $persona_vieja = Person::findOrFail($request->id_viejo);
            $persona_vieja->id = $request->id;
            $persona_vieja->save();
            $persona = Person::findOrFail($request->id);
        }
        $persona->id = $request->id;
        $persona->paterno = $request->paterno;
        $persona->materno = $request->materno;
        $persona->nombres = $request->nombres;
        $persona->city_id = $request->city_id;
        $persona->save();

        Alert::message('Usuario: ' . $request->id . ' actualizado exitósamente', 'success');

        return redirect()->route('usuarios');
    }
}
