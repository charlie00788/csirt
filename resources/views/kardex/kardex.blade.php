@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('course', $unidad->id) }}">{{ $unidad->unity }}</a>
                </li>
                <li>
                    {{ $curso->course }}
                </li>
            </ol>
            <ol class="breadcrumb">
                <li>
                    Estudiantes: {{ $kardexes->total() }}
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
                        <a class="btn btn-primary" href="{{ route('buscarEstudiante', $curso->id) }}">
                            Agregar Estudiante
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
                            <th>C.I.</th>
                            <th>Grado</th>
                            <th>Especialidad</th>
                            <th>Paterno</th>
                            <th>Materno</th>
                            <th>Nombres</th>
                            <th colspan="2" style="text-align: center">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kardexes as $kardex)
                            <tr>
                                <td>{{ $kardex->person_id }}</td>
                                <td>{{ $kardex->grade }}</td>
                                <td>{{ $kardex->especialty }}</td>
                                <td>{{ $kardex->paterno }}</td>
                                <td>{{ $kardex->materno }}</td>
                                <td>{{ $kardex->nombres }}</td>
                                <td style="text-align: center"><a href="{{ route('record', $kardex->k_id) }}" class="btn btn-xs btn-primary">Ingresar</a></td>
                                @if($usuario->role == 'user')
                                <td style="text-align: center"><a href="{{ route('borrarKardex', $kardex->k_id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
                                @endif
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $kardexes->render() !!}

            </div>
        </div>
    </div>

@endsection