@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    Centros de Formación: {{ $unidades->count() }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        @if($usuario->role == 'admin')  {{-- solo el administrador puede entrar aca --}}
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content">
                    <a class="btn btn-primary" href="{{ route('agregarUnidad') }}">
                        Agregar Unidad de Formación
                    </a>
                </div>
            </div>
        </div>
        @endif                          {{-- hasta aca puede entrar el admin --}}
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Unidades de Formación Profesional y Especialización</th>
                            <th style="text-align: center">Cursos o Módulos</th>
                            @if($usuario->role == 'admin')
                            <th style="text-align: center">Materias</th>
                            <th style="text-align: center">Usuarios</th>
                            <th colspan="2" style="text-align: center">Opciones</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($unidades as $unidad)
                            <tr>
                                <td>{{ $unidad->unity }}</td>
                                <td style="text-align: center"><a href="{{ route('course', $unidad->id) }}">Ingresar</a></td>
                                @if($usuario->role == 'admin')
                                <td style="text-align: center"><a href="{{ route('topic', $unidad->id) }}">Ver</a></td>
                                <td style="text-align: center"><a href="{{ route('user', $unidad->id) }}">Admininstrar</a></td>
                                <td style="text-align: center"><a href="{{ route('editarUnidad', $unidad->id) }}">Modificar</a></td>
                                <td style="text-align: center"><a href="{{ route('borrarUnidad', $unidad->id) }}">Eliminar</a></td>
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