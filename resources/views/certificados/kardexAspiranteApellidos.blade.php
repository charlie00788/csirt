@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Aspirante</th>
                            <th>Unidad de Formación Profesional y Especialización</th>
                            <th>Curso o Módulo</th>
                            <th>Año</th>
                            <th style="text-align: center">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kardexes as $kardex)
                            <tr>
                                <td>
                                    {{ $kardex->grade }}
                                    {{ $kardex->especialty }}
                                    {{ $kardex->paterno }}
                                    {{ $kardex->materno }}
                                    {{ $kardex->nombres }}
                                </td>
                                <td>{{ $kardex->course->unity->unity }}</td>
                                <td>{{ $kardex->course->course }}</td>
                                <td>{{ $kardex->year }}</td>
                                <td style="text-align: center"><a href="{{ route('record', $kardex->k_id) }}">Ingresar</a></td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection