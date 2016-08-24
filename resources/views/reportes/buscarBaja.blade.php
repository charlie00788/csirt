@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>{{ $usuario->unity->unity }}</h2>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox">
                    <div class="ibox-title">
                        <h2>Datos de la búsqueda</h2>
                    </div>
                    <div class="ibox-content">
                        <div class="form-horizontal">

                            {!! Form::open(['route' => 'postBusquedaBajas', 'method' => 'POST']) !!}

                            <div class="form-group">
                                {!! Form::label('unity_id', 'Unidad:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::select('unity_id') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group" id="parte2">
                                {!! Form::label('course_id', 'Curso o Módulo:', ['class' => 'col-lg-3 control-label']) !!}
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {!! Form::select('course_id') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group" id="botoncito">
                                <div class="col-lg-3">
                                    {!! Form::submit('Imprimir Reporte de Baja', ['class' => 'btn btn-block btn-primary']) !!}
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

@section('javascript')

    <script type="text/javascript">
        $(document).ready(function(){
            var selectUnidades = $("#unity_id");
            var selectCursos = $("#course_id");
            var parte2 = $("#parte2");
            var boton = $("#botoncito")

            parte2.slideUp('fast');
            boton.slideUp('fast');

            $.getJSON("{{ route('restListarUnidades') }}", function(respuesta){
                selectUnidades.empty;
                $.each(respuesta, function(key, row){
                    selectUnidades.append("<option value='" + row.id + "'> " + row.unity + "</option>")
                });
            });

            selectUnidades.change(function(){
                selectCursos.empty();

                var valorCurso = $(this).val();

                $.getJSON("{{ url('listarCursos') }}" + "/" + valorCurso, function(respuesta){

                    parte2.slideDown('fast');

                    $.each(respuesta, function(key, row){
                        selectCursos.append("<option value='" + row.id + "'> " + row.course + "</option>")
                    });

                    boton.slideDown('fast');
                });
            })
        })
    </script>

@endsection