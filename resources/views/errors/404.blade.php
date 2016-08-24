<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Departamento VI "Enseñanza e Institutos Navales"</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/plugins/iCheck/custom.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('fuentespropias/open-sans.css') !!}
    {!! Html::style('css/stylo.css') !!}
    {!! Html::style('css/mystyles.css') !!}

</head>

<body class="gray-bg">


<div class="middle-box text-center animated fadeInDown">
    <h1>404</h1>
    <h3 class="font-bold">Página no encontrada</h3>

    <div class="error-desc">
        Lo sentimos, pero la página que está buscando no ha sido encontrada o
        está intentado ingresar a un lugar que no le corresponde.
    </div>
    <div>
        <p>
            <a class="btn btn-primary" href="{{ route('home') }}">
                Volver a la página principal
            </a>
        </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
