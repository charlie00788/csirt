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

                            {!! Form::open(['route' => 'guardarKardex', 'method' => 'POST']) !!}
                            {!! Form::hidden('course_id', $curso->id) !!}

                            <div class="form-group">
                                {!! Form::label('id', 'Carnet de identidad:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('id', $estudiante->id, ['onfocus' => 'this.blur()']) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('city_id', 'Expedido:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::select('city_id', $ciudad, $estudiante->city_id) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('grade_id', 'Grado:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::select('grade_id', $grados) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('especialty_id', 'Especialidad:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::select('especialty_id', $especialidad) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('paterno', 'Apellido paterno:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('paterno', $estudiante->paterno) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('materno', 'Apellido materno:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('materno', $estudiante->materno) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('nombres', 'Nombres:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('nombres', $estudiante->nombres) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('tin', 'TIN:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('tin', $estudiante->tin) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('year', 'Gestión:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('year', null, ['data-mask' => '9999']) !!}
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