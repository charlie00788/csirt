@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox">
                    <div class="ibox-title">
                        <h2>Cambiar contraseña</h2>
                    </div>
                    <div class="ibox-content">
                        <div class="form-horizontal">

                            @include('partials.errors')
                            {!! Alert::render() !!}

                            {!! Form::open(['route' => 'cambiadoPassword', 'method' => 'PUT']) !!}
                            {!! Form::hidden('id', $usuario->id) !!}

                            <div class="form-group">
                                {!! Form::label('password', 'Nueva contraseña:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::password('password', ['placeholder' => 'Contraseña']) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Confirmar contraseña:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::password('password_confirmation', ['placeholder' => 'Repetir contraseña']) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::submit('Guardar contraseña nueva', ['class' => 'btn btn-block btn-primary']) !!}
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection