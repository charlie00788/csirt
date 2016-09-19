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
                        <h2>Sugerencias de Mitigación</h2>
                        <span>Sugerencias</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Sugerencias de Mitigación</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        @include('partials.errors')

                        {!! Form::open(['route' => 'descubrimiento.postVulnerabilidades', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('vu1', 'Acceso no autorizado', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('vu1', [
                                        'Monitoreo de servidores' => 'Monitoreo de servidores',
                                        'Monitoreo de red' => 'Monitoreo de red',
                                        'Empleo de la aplicacion Ban' => 'Empleo de la aplicacion Ban',
                                        'Ban mensuales' => 'Ban mensuales',
                                        'Ban automáticos' => 'Ban automáticos'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('vu1', 'Código malicioso', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('vu1', [
                                        'Aislar la terminal infectada del resto de la red',
                                        'Instalar antivirus',
                                        'Actualizar antivirus',
                                        'Aplicacion Malicious Software Removal Tool',
                                        'Detección y eliminación de los programas antivirus',
                                        'Formateo de la unidad de almacenamiento'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('vu1', 'Denegación de servicios', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('vu1', [
                                        'Aplicación DDoSDeflate',
                                        'Aplicación LOIC',
                                        'CTRIX NETSCALER'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('vu1', 'Mal uso de las tecnologīas de información', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('vu1', [
                                        'Seguimiento al cumplimiento de los manuales de uso de las TIC',
                                        'Cumplimiento a las políticas de seguridad',
                                        'Cursos de actualización'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::submit('Guardar Sugerencia de Mitigación', ['class' => 'btn btn-block btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection