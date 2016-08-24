@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    {{ $unidad }}
                </li>
            </ol>
            <ol class="breadcrumb">
                <li>
                    Cursos o módulos: {{ $cursos->total() }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')

    @include('partials.errors')

    <div class="wrapper wrapper-content">

        {!! Alert::render() !!}

        @if($usuario->role == 'user')
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content">
                    <a class="btn btn-primary" href="{{ route('agregarCurso', $usuario->unity_id) }}">
                        Agregar Curso o Módulo
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
                            <th>Cursos o Módulos</th>
                            @if($usuario->role == 'user')
                            <th colspan="2" style="text-align: center">Opciones</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cursos as $curso)
                            <tr>
                                <td><a href="{{ route('kardex', $curso->id) }}">{{ $curso->course }}</a></td>
                                @if($usuario->role == 'user')
                                <td style="text-align: center"><a href="{{ route('editarCurso', $curso->id) }}">Modificar</a></td>
                                <td style="text-align: center"><a href="{{ route('borrarCurso', $curso->id) }}">Eliminar</a></td>
                                @endif
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $cursos->render() !!}

            </div>
        </div>
    </div>

@endsection