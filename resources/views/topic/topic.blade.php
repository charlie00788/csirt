@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    {{ $unidad->unity }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        @if($usuario->role == 'user')
            <div class="row">
                <div class="col-lg-12 animated fadeInRight">
                    <div class="ibox-content">
                        <a class="btn btn-primary" href="{{ route('nuevoTopic', $unidad->id) }}">
                            Agregar Materia o Periodo
                        </a>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Materias o Periodos</th>
                            @if($usuario->role == 'user')
                            <th style="text-align: center">Opciones</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($topics as $topic)
                            <tr>
                                <td>{{ $topic->topic }}</td>
                                @if($usuario->role == 'user')
                                <td style="text-align: center"><a href="{{ route('borrarTopic', $topic->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
                                @endif
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection