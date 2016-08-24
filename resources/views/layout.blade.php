<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--<meta http-equiv="refresh" content="60;URL={!! route('logout') !!}" >

    <meta http-equiv=”expires” content=”0″>

    <meta http-equiv=”Cache-Control” content=”no-cache”>

    <meta http-equiv=”Pragma” CONTENT=”no-cache”> --}}

    <title>Departamento VI "Enseñanza e Institutos Navales"</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/plugins/iCheck/custom.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('fuentespropias/open-sans.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/mystyles.css') !!}


</head>

<body class="fixed-sidebar fixed-nav fixed-nav-basic">

    <div id="wrapper">
        {{-- Para la navegacion --}}
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">

                        {{-- Esta parte para el profile --}}

                        @include('partials.profile')

                        <div class="logo-element">
                            Dpto. VI
                        </div>
                    </li>

                    {{-- aca vamos a incluir el menu de usuario --}}

                    @include('partials.menu')

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">

            @include('partials.head')

            @yield('title')

            {{-- desde aca comienza la parte del contenido --}}

            @yield('content')

            {{-- aca es la parte que comienza el footer --}}

            @include('partials.footer')

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

    <!-- Input Mask-->
    {!! HTML::script('js/plugins/jasny/jasny-bootstrap.min.js') !!}

    @yield('scripts')

    @yield('javascript')

</body>

</html>
