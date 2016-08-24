@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    Usuarios: {{ $usuarios->total() }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content">
                    <a class="btn btn-primary" href="{{ route('nuevoUsuario') }}">
                        Agregar Usuario
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-0 animated fadeInRight">
            </div>
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
                            <th>Unidad</th>
                            <th style="text-align: center">Estado</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->rol }}</td>
                                <td>{{ $user->grade->grade }}</td>
                                <td>{{ $user->especialty->especialty }}</td>
                                <td>{{ $user->person->paterno }}</td>
                                <td>{{ $user->person->materno }}</td>
                                <td>{{ $user->person->nombres }}</td>
                                <td>{{ $user->unity->unity }}</td>
                                <td style="text-align: center">{{ $user->estado }}</td>
                                @if($user->active == true)
                                <td style="text-align: center"><a href="{{ route('editarUsuario', $user->id) }}" class="btn btn-xs btn-primary">Modificar</a></td>
                                <td style="text-align: center"><a href="{{ route('desactivarUsuario', $user->id) }}" class="btn btn-xs btn-danger">Desactivar</a></td>
                                @else
                                <td colspan="2" style="text-align: center"><a href="{{ route('activarUsuario', $user->id) }}" class="btn btn-xs btn-primary">Activar</a></td>
                                @endif
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $usuarios->render() !!}

            </div>
        </div>
    </div>

@endsection