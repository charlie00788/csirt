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
                        <h2>Notificaciones</h2>
                        <span>Fecha: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Notificación 1</h2>
                </div>
                <div class="ibox-content">
                    <div class="form-horizontal">

                        @include('partials.errors')

                        <h2 class="font-bold" align="center">
                            <img src="{{ asset('imagenes/noti1.png') }}" alt="" width="50%">
                        </h2>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection