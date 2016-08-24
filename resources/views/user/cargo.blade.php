@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>Departamento VI "Enseñanza e Intitutos Navales"</h2>
            <ol class="breadcrumb">
                <li>
                    Cargos: {{ $cargos->total() }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')

        <div class="row">
            <div class="col-lg-0 animated fadeInRight">
            </div>
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Grado</th>
                            <th>Especialidad</th>
                            <th>Paterno</th>
                            <th>Materno</th>
                            <th>Nombres</th>
                            <th>Cargo</th>
                            <th style="text-align: center">Gestión</th>
                            <th style="text-align: center">Estado</th>
                            @if($usuario->role == 'admin')
                            <th style="text-align: center">Opciones</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cargos as $cargo)
                            <tr>
                                <td>{{ $cargo->grade->grade }}</td>
                                <td>{{ $cargo->especialty->especialty }}</td>
                                <td>{{ $cargo->person->paterno }}</td>
                                <td>{{ $cargo->person->materno }}</td>
                                <td>{{ $cargo->person->nombres }}</td>
                                <td>{{ $cargo->carguito }}</td>
                                <td style="text-align: center">{{ $cargo->year }}</td>
                                <td style="text-align: center">{{ $cargo->estado }}</td>
                                @if($usuario->role == 'admin')
                                <td style="text-align: center"><a href="#" class="btn btn-xs btn-danger">Desactivar</a></td>
                                @endif
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $cargos->render() !!}

            </div>
        </div>
    </div>

@endsection