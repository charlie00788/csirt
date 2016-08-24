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
                        <h2>Descubrimiento</h2>
                        <span>Vulnerabilidades</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Vulnerabilidades</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        @include('partials.errors')

                        {!! Form::open(['route' => 'descubrimiento.postVulnerabilidades', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::label('vu1', 'Vulnerabilidades', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('vu1', [
                                        'Errores de configuración' => 'Errores de configuración',
                                        'Robo de información' => 'Robo de información',
                                        'Alteración de la información' => 'Alteración de la información',
                                        'Intentos recurrentes de acceso no autorizados' => 'Intentos recurrentes de acceso no autorizados',
                                        'Virus' => 'Virus',
                                        'Gusanos' => 'Gusanos',
                                        'Troyanos' => 'Troyanos',
                                        'Spamm' => 'Spamm',
                                        'Phishing' => 'Phishing',
                                        'Tiempo de respuesta muy bajos' => 'Tiempo de respuesta muy bajos',
                                        'Servicios internos inaccesibles' => 'Servicios internos inaccesibles',
                                        'Servicios externos inaccesibles' => 'Servicios externos inaccesibles',
                                        'Violación de normas' => 'Violación de normas',
                                        'Mal uso de correo electrónico' => 'Mal uso de correo electrónico',
                                        'Violación de políticas de seguridad' => 'Violación de políticas de seguridad',
                                        'Código propenso a ataques de buffer overflows' => 'Código propenso a ataques de buffer overflows',
                                        'Ataques de descriptor de archivos' => 'Ataques de descriptor de archivos',
                                        'Incorrecta asignacion de permisos a archivos y directorios' => 'Incorrecta asignacion de permisos a archivos y directorios'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::submit('Guardar Vulnerabilidad', ['class' => 'btn btn-block btn-primary']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection