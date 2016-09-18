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

                {!! Alert::render() !!}
                @include('partials.errors')

                <div class="ibox-content m-b-sm border-bottom">
                    <div class="text-center p-lg">
                        <h2>Planificación</h2>
                        <span>Haga click en la carateristica para mostrar</span>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq1" class="faq-question">Identificar los riesgos inherentes</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq1" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Identificar los riesgos en la realizacion de la prueba de penetracion asi como
                                        tecnicas y medidas de mitigacion que seran utilizados por el pentester. <a href="{{ route('planificacion.getRiesgosInherentes') }}" class="btn btn-success"> Ingresar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq2" class="faq-question">Definir el personal</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq2" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Definir el personal que realizara la prueba, el personal clave de la
                                        organizacion responsables de activos que seran probados y los medios
                                        para contactarlos. <a href="{{ route('planificacion.getDefinirPersonal') }}" class="btn btn-success"> Ingresar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq3" class="faq-question">Establecer la programacion de las pruebas</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq3" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Establecer la programacion de las pruebas la cual debe incluir las pruebas criticas y sus etapas
                                        y los horarios en que se llevara a cabo. <a href="{{ route('planificacion.getProgramacionPruebas') }}" class="btn btn-success"> Ingresar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq4" class="faq-question">Determinar los lugares</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq4" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Determinar los lugares autorizados para realizar la prueba de penetracion. <a href="{{ route('planificacion.getLugaresPenetracion') }}" class="btn btn-success"> Ingresar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq5" class="faq-question">Determinar el nivel de acceso</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq5" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Determinar el nivel de acceso (usuario o administrador) a los sistemas y/o red. <a href="{{ route('planificacion.getNivelesAcceso') }}" class="btn btn-success"> Ingresar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="faq-item">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a data-toggle="collapse" href="#faq6" class="faq-question">Indicar la direccion IP</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<div id="faq6" class="panel-collapse collapse ">--}}
                                {{--<div class="faq-answer">--}}
                                    {{--<p>--}}
                                        {{--En caso de que aplique indicar la direccion IP desde donde la cual se haran--}}
                                        {{--las pruebas de forma remota.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="faq-item">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a data-toggle="collapse" href="#faq7" class="faq-question">Identificar HW y SW</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<div id="faq7" class="panel-collapse collapse ">--}}
                                {{--<div class="faq-answer">--}}
                                    {{--<p>--}}
                                        {{--Especificar el hardware y software que el equipo de pentester utilizara--}}
                                        {{--para realizar las pruebas.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="faq-item">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a data-toggle="collapse" href="#faq8" class="faq-question">Determinar los sistemas y/o redes</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<div id="faq8" class="panel-collapse collapse ">--}}
                                {{--<div class="faq-answer">--}}
                                    {{--<p>--}}
                                        {{--Determinar los sistemas y/o redes que se probara durante todo el proceso--}}
                                        {{--de pruebas.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq9" class="faq-question">Determinar cumplimiento de políticas</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq9" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Solicitar autorización para realizar el trabajo de penetración en
                                        HW, SW o IP de acuerdo a formato establicido. <a href="{{ route('planificacion.getCumplimientoPoliticas') }}" class="btn btn-success"> Ingresar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection