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
                        <h2>Reporte del {{ Carbon::now()->format('d/M/Y') }}</h2>
                        <span>Variables del Sistema</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Reporte</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        @include('partials.errors')

                        <div class="form-group">
                            {!! Form::label('Lugar', 'Lugar:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    Departamento de Ciencias Tecnológicas
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Riesgo', 'Riesgo:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    @if(\App\Entities\Plan::find('pl1')->estado == 'Si')
                                        {{ \App\Entities\Plan::find('pl1')->descripcion }} <br>
                                    @endif
                                    @if(\App\Entities\Plan::find('pl2')->estado == 'Si')
                                        {{ \App\Entities\Plan::find('pl2')->descripcion }} <br>
                                    @endif
                                    @if(\App\Entities\Plan::find('pl3')->estado == 'Si')
                                        {{ \App\Entities\Plan::find('pl3')->descripcion }} <br>
                                    @endif
                                    @if(\App\Entities\Plan::find('pl4')->estado == 'Si')
                                        {{ \App\Entities\Plan::find('pl4')->descripcion }}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Vulnerabilidad', 'Vulnerabilidad:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {{ \App\Entities\Plan::find('vu1')->estado }}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('NVulnerabilidad', 'Nueva Vulnerabilidad:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {{ \App\Entities\Plan::find('nv1')->estado }}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Prueba', 'Prueba:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    Desde el {{ Carbon::createFromFormat('Y-m-d', \App\Entities\Plan::find('pp1')->estado)->format('d/m/Y') }}
                                    hasta {{ Carbon::createFromFormat('Y-m-d', \App\Entities\Plan::find('pp2')->estado)->format('d/m/Y') }}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Tipo', 'Tipo de Escaneo:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {{ \App\Entities\Plan::find('es1')->estado }}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Num', 'Número de PCs:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {{ $totalPc }}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('ip', 'Direcciones IP:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    @for($i=1; $i<=$totalPc; $i++)
                                        192.168.10.{{ $i }}
                                        @if($i != $totalPc)
                                            <br>
                                        @endif
                                    @endfor
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('nivel', 'Nivel de Acceso:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {{ \App\Entities\Plan::find('na1')->estado }}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('personal', 'Personal Responsable:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {{ \App\Entities\Plan::find('dp1')->descripcion }}:
                                    {{ \App\Entities\Plan::find('dp1')->estado }} <br>
                                    {{ \App\Entities\Plan::find('dp2')->descripcion }}:
                                    {{ \App\Entities\Plan::find('dp2')->estado }} <br>
                                    {{ \App\Entities\Plan::find('dp3')->descripcion }}:
                                    {{ \App\Entities\Plan::find('dp3')->estado }}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('pol', 'Política:' , ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {{ \App\Entities\Plan::find('cp1')->estado }}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::button('Imprimir Reporte' , ['class' => 'btn btn-block btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection