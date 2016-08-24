@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $unidad->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    Usuarios: {{ $users->count() }}
                </li>
            </ol>
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
                            <th>Usuario</th>
                            <th>Rol</th>
                            <th>Grado</th>
                            <th>Especialidad</th>
                            <th>Paterno</th>
                            <th>Materno</th>
                            <th>Nombres</th>
                            <th style="text-align: center">Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->rol }}</td>
                                <td>{{ $user->grade->grade }}</td>
                                <td>{{ $user->especialty->especialty }}</td>
                                <td>{{ $user->person->paterno }}</td>
                                <td>{{ $user->person->materno }}</td>
                                <td>{{ $user->person->nombres }}</td>
                                <td style="text-align: center">{{ $user->estado }}</td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection