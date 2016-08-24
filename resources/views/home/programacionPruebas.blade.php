@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>CSIRT</h2>
        </div>
    </div>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="ibox-content m-b-sm border-bottom">
                    <div class="text-center p-lg">
                        <h2>Planificación</h2>
                        <span>Programación de las Pruebas</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Programación de las Pruebas</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        @include('partials.errors')

                        {!! Form::open(['route' => 'planificacion.postProgramacionPruebas', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::label('pp1', 'Fecha de Inicio de la Prueba', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::date('pp1', \Carbon\Carbon::now()) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('pp2', 'Fecha de Finalización de la Prueba', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::date('pp2', \Carbon\Carbon::now()) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::submit('Guardar Programación de Pruebas', ['class' => 'btn btn-block btn-primary']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection