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
                        <h2>CSIRT</h2>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq1" class="faq-question">Misión</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq1" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        El Centro de Respuesta a Incidentes de Seguridad Informatica, actúa en el monitoreo, mitigación y respuesta, de los incidentes informáticos generados en los Sistemas de Información de la Escuela Militar de Ingeniería, además de promover el conocimiento en seguridad de la información de manera de prevenir y responder a incidentes de seguridad.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq2" class="faq-question">Visión</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq2" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Ser un centro de respuesta a incidentes en seguridad informática confiable y un referente a nivel Académico, regional y nacional.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq3" class="faq-question">Servicios</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq3" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        En el sistema tratar de incluir los servicios prestados por el CSIRT.
                                        <br><br>
                                        Servicios preventivos
                                        <br>
                                        <li>Recepción de reportes de los diferentes incidentes que ocurran en los departamentos de la Escuela Militar de Ingeniería.</li>
                                        <li>Búsqueda de vulnerabilidades.</li>
                                        <li>Configuración y mantenimiento de herramientas de seguridad, aplicaciones e infraestructuras.</li>
                                        <li>Desarrollo de herramientas de seguridad.</li>
                                        <li>Propagación de información relacionada con la seguridad.</li>
                                        <li>Cumplimiento de políticas en sistemas de BD, servidores, ruteadores, PCI, etc.</li>
                                        <li>Uso de procedimientos, políticas y metodologías para la respuesta a incidentes.</li>
                                    <br>
                                    Servicios reactivos
                                    <br><br>
                                    <li>Gestión de incidentes de seguridad (análisis, respuesta, soporte y coordinación de incidentes de seguridad).</li>
                                    <li>Gestión de vulnerabilidades (análisis, respuesta y coordinación de vulnerabilidades detectadas).</li>
                                    <li>Servicios de Detección de Intrusiones.</li>
                                    <li>Implementación y Configuración de las Herramientas, Aplicaciones, Infraestructuras y Servicios de Seguridad.</li>
                                    <li>Estudio de Tráfico Malicioso.</li>
                                    <li>Definición de nuevas políticas de seguridad.</li>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq4" class="faq-question">Organización</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq4" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        La organización del CSIRT es la siguiente
                                        <br>
                                        <h2 class="font-bold" align="center">
                                            <img src="{{ asset('imagenes/orga.png') }}" alt="" width="50%">
                                        </h2>
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