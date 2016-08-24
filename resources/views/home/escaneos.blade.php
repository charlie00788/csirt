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
                        <span>Escaneos</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Escaneos</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        @include('partials.errors')

                        {!! Form::open(['route' => 'descubrimiento.postEscaneo', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::label('es1', 'Escaneos', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('es1', [
                                        'Betrix 24' => 'Betrix 24',
                                        'Advanced IP Scanner' => 'Advanced IP Scanner',
                                        'Acrilic WiFi' => 'Acrilic WiFi'
                                    ]) !!}
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::submit('Guardar Escaneo', ['class' => 'btn btn-block btn-primary']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection