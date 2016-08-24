@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('course', $curso->unity_id) }}">{{ $curso->unity->unity }}</a>
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
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox">
                    <div class="ibox-title">
                        <h2>Materia o Periodo</h2>
                    </div>
                    <div class="ibox-content">
                        <div class="form-horizontal">

                            @include('partials.errors')

                            {!! Form::open(['route' => 'guardarRegistro', 'method' => 'POST']) !!}
                            {!! Form::hidden('kardex_id', $kardex->id) !!}

                            <div class="form-group">
                                {!! Form::label('topic_id', 'Materia o Periodo:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::select('topic_id', $topics) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('nota', 'Nota:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('nota') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::submit('Guardar Estudiante', ['class' => 'btn btn-block btn-primary']) !!}
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection