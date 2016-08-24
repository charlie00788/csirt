<?php

namespace App\Http\Controllers;

use App\Entities\Topic;
use App\Entities\Unity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class TopicController extends Controller
{
    public function topic($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $unidad = Unity::where('id', $id)->first();
        $topics = Topic::where('unity_id', $id)
                ->where('active', true)
                ->get();

        return view('topic.topic', compact('usuario', 'person', 'topics', 'unidad'));
    }

    public function nuevoTopic($id)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        $unidad = Unity::where('id', $id)->first();

        return view('topic.nuevoTopic', compact('usuario', 'person', 'unidad'));

    }

    public function guardarTopic(Request $request)
    {
        $usuario = Auth::user();

        $rules = [
            'topic'  => 'required|max:150',
        ];

        $this->validate($request, $rules);

        $topic = new Topic;
        $topic->topic = $request->topic;
        $topic->unity_id = $request->unity_id;
        $topic->user_id = $usuario->id;
        $topic->save();

        Alert::message('Materia o Periodo: ' . $topic->topic . ' guardado exitósamente', 'success');

        return redirect()->route('topic', $topic->unity_id);
    }

    public function borrarTopic($id)
    {
        $usuario = Auth::user();

        $topic = Topic::findOrFail($id);
        $topic->active = false;
        $topic->user_id = $usuario->id;
        $topic->save();

        Alert::message('Materia o Periodo: ' . $topic->topic . ' eliminado exitósamente', 'success');

        return redirect()->route('topic', $topic->unity_id);
    }
}
