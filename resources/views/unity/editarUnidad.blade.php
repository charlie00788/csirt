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
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12 animated fadeInRight">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h2>Datos de la Unidad de Formación</h2>
                        </div>
                        <div class="ibox-content">
                            <div class="form-horizontal">

                                @include('partials.errors')

                                {!! Form::model($unidad, ['route' => 'actualizarUnidad', 'method' => 'PUT']) !!}

                                {!! Form::hidden('id') !!}

                                <div class="form-group">
                                    {!! Form::label('unity', 'Unidad de Formación:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('unity', old('unity')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::submit('Actualizar Unidad de Formación', ['class' => 'btn btn-block btn-primary']) !!}
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection