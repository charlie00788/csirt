@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>CSIRT</h2>
        </div>
    </div>

@endsection

@section('content')

    @include('partials.errors')

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="ibox-content m-b-sm border-bottom">
                    <div class="text-center p-lg">
                        <h2>Planificación</h2>
                        <span>Riesgos</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Riesgos inherentes</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        @include('partials.errors')

                        {!! Form::open(['route' => 'planificacion.postRiesgosInherentes', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::label('pl1', 'Acceso no autorizado', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('pl1', ['No' => 'No', 'Si' => 'Si']) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('pl2', 'Código malicisioso', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('pl2', ['No' => 'No', 'Si' => 'Si']) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('pl3', 'Denegación de servicios', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('pl3', ['No' => 'No', 'Si' => 'Si']) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('pl4', 'Mal uso de recursos tecnológicos', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('pl4', ['No' => 'No', 'Si' => 'Si']) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::submit('Guardar Riesgos', ['class' => 'btn btn-block btn-primary']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection