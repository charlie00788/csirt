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
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox">
                    <div class="ibox-title">
                        <h2>Datos del Estudiante</h2>
                    </div>
                    <div class="ibox-content">
                        <div class="form-horizontal">

                            @include('partials.errors')

                            {!! Form::open(['route' => 'encontradoEstudiante', 'method' => 'POST']) !!}
                            {!! Form::hidden('course_id', $curso->id) !!}

                            <div class="form-group">
                                {!! Form::label('id', 'Carnet de identidad:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('id') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::submit('Ingresar C.I.', ['class' => 'btn btn-block btn-primary']) !!}
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