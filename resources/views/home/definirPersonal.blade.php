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
                        <span>Definir Personal</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Definición del Personal</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        @include('partials.errors')

                        {!! Form::open(['route' => 'planificacion.postDefinirPersonal', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::label('dp1', 'Oficial de Seguridad', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('dp1', [
                                        'Ing. Carlos Ponce' => 'Ing. Carlos Ponce'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('dp2', 'Departamento de Tecnologías de la Información', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('dp2', [
                                        'Ing. Raúl Ardaya' => 'Ing. Raúl Ardaya',
                                        'Tec. Edgar Pérez' => 'Tec. Edgar Pérez',
                                        'Tec. Maria Padilla' => 'Tec. Maria Padilla'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('dp3', 'Departamento de Asistencia Técnica', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('dp3', [
                                        'Ing. Rafael Tapia' => 'Ing. Rafael Tapia',
                                        'Tec. Pamela Fiel' => 'Tec. Pamela Fiel',
                                        'Tec. Roberto Aliga' => 'Tec. Roberto Aliga'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::submit('Guardar Personal', ['class' => 'btn btn-block btn-primary']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection