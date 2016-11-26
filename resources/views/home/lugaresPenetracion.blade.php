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
                        <span>Lugares</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Lugares para realizar la Penetración</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        {!! Form::open(['route' => 'planificacion.postLugaresPenetracion', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::label('lp1', 'Departamentos de Carrera', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('lp1', [
                                        '0' => '0',
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10',
                                    ]) !!} computadoras
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('lp2', 'Tesorería', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('lp2', [
                                        '0' => '0',
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10',
                                    ]) !!} computadoras
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('lp3', 'Cajas', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('lp3', [
                                        '0' => '0',
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10',
                                    ]) !!} computadoras
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('lp4', 'Secretaría Académica', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('lp4', [
                                        '0' => '0',
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10',
                                    ]) !!} computadoras
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('lp5', 'DNI', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('lp5', [
                                        '0' => '0',
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10',
                                    ]) !!} computadoras
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('lp6', 'DARE', ['class' => 'col-lg-3 control-label']) !!}
                            <div class="col-lg-9">
                                <p class="form-control-static">
                                    {!! Form::select('lp6', [
                                        '0' => '0',
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10',
                                    ]) !!} computadoras
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::submit('Guardar Lugares', ['class' => 'btn btn-block btn-primary']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection