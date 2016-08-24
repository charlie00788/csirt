@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('course', $unidad->id) }}">{{ $unidad->unity }}</a>
                </li>
                <li>
                    <a href="{{ route('kardex', $curso->id) }}">{{ $curso->course }}</a>
                </li>
                <li>
                    {{ $kardex->nombre_completo }}
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
                        <a class="btn btn-primary" href="{{ route('nuevoRegistro', $kardex->id) }}">
                            Agregar Materia o Periodo
                        </a>
                    </div>
                </div>
            </div>
        @endif
        @if($usuario->role == 'supervisor')
            @if($notas->count() > 0)
                <div class="row">
                    <div class="col-lg-12 animated fadeInRight">
                        <div class="ibox-content">
                            <a target="_blank" class="btn btn-primary" href="{{ route('nuevoCertificadoEgreso', $kardex->id) }}">
                                Extender certificado de calificaciones
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endif
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>Materia o Periodo</th>
                                <th style="text-align: center">Nota</th>
                                @if($usuario->role == 'user')
                                <th style="text-align: center">Opciones</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($notas as $nota)
                            <tr>
                                <td>{{ $nota->topic->topic }}</td>
                                <td style="text-align: center">{{ $nota->nota }}</td>
                                @if($usuario->role == 'user')
                                <td style="text-align: center"><a href="{{ route('borrarRegistro', $nota->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
                                @endif
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $notas->render() !!}

            </div>
        </div>
    </div>

@endsection