<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio de Sesión</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('fuentespropias/open-sans.css') !!}
    {!! Html::style('css/style.min.css') !!}
    {!! Html::style('css/mystyles.css') !!}

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">

    <div class="row">
        <div class="col-md-8">
            <h2 class="font-bold" align="center">
                CENTRO DE RESPUESTA A INCIDENTES DE SEGURIDAD INFORMÁTICA <br>
                ESCUELA MILITAR DE INGENIERÍA
            </h2>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">

            <p align="justify">

            Bienvenidos al Sistema de Centro de Respuestas a Incidentes de Seguridad Informáticas.

        </p>

        <p align="justify">
            En el Centro de Respuestas a Incidentes de Seguridad Informáticas podrá realizar el
            monitoreo y mitigación de incidentes informáticos desarrollado como Trabajo de Grado
            para el Título a Nivel Licenciatura.
        </p>

        </div>
        <div class="col-md-6">

            @include('partials.errors')

            @yield('content')

        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            Desarrollado por MY. ING. Erick Rolando Palenque Ríos
        </div>
        <div class="col-md-4 text-right">
            <small>Copyright © 2016</small>
        </div>
    </div>
</div>

</body>

</html>
