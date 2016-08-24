@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>{{ $usuario->unity->unity }}</h2>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox">
                    <div class="ibox-title">
                        <h2>Datos del Aspirante</h2>
                    </div>
                    <div class="ibox-content">
                        <div class="form-horizontal">

                            @include('partials.errors')

                            {!! Form::open(['route' => 'nuevoCertificadoAspiranteNada', 'method' => 'POST', 'target' => '_blank']) !!}

                            <div class="form-group">
                                {!! Form::label('id', 'Carnet de identidad:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('id', $aspirante->id, ['onfocus' => 'this.blur()']) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('city_id', 'Expedido:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::select('city_id', $ciudad, $aspirante->city_id) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('paterno', 'Apellido paterno:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('paterno', $aspirante->paterno) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('materno', 'Apellido materno:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('materno', $aspirante->materno) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('nombres', 'Nombres:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::text('nombres', $aspirante->nombres) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::submit('Imprimir certificado', ['class' => 'btn btn-block btn-primary']) !!}
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