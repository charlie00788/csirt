<li>
    <a href="{{ route('getMision') }}"><i class="fa fa-file-text-o"></i> <span class="nav-label">CSIRT EMI</span></a>
</li>

<li>
    <a href="{{ route('getNotificacion') }}"><i class="fa fa-file-text-o"></i> <span class="nav-label">Notificaciones</span></a>
</li>

<li>
    <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">NIST-800-115</span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ route('getPlanificacion') }}">Fase de planificación</a>
        </li>
        <li>
            <a href="{{ route('getDescubrimiento') }}">Fase de descubrimiento</a>
        </li>
        <li>
            <a href="{{ route('getAtaques') }}">Fase de ataque</a>
        </li>
        <li>
            <a href="{{ route('getReporte') }}">Fase de reporte</a>
        </li>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">OSSTMM</span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="#">Fase de planificación</a>
        </li>
        <li>
            <a href="#">Fase de descubrimiento</a>
        </li>
        <li>
            <a href="#">Fase de ataque</a>
        </li>
        <li>
            <a href="#">Fase de reporte</a>
        </li>
    </ul>
</li>



{{--@if(($usuario->role == 'admin') || ($usuario->role == 'supervisor'))--}}

    {{--<li>--}}
        {{--<a href="{{ route('unidad') }}"><i class="fa fa-bank"></i> <span class="nav-label">Unidades</span></a>--}}
    {{--</li>--}}
    {{--@if($usuario->role == 'admin')--}}
        {{--<li>--}}
            {{--<a href="{{ route('usuarios') }}"><i class="fa fa-users"></i> <span class="nav-label">Usuarios</span></a>--}}
        {{--</li>--}}
    {{--@endif--}}
    {{--<li>--}}
        {{--<a href="{{ route('cargo') }}"><i class="fa fa-user-md"></i> <span class="nav-label">Cargos</span></a>--}}
    {{--</li>--}}
    {{--@if($usuario->role == 'supervisor')--}}
        {{--<li>--}}
            {{--<a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">NIST-800-115</span></a>--}}
            {{--<ul class="nav nav-second-level">--}}
                {{--<li>--}}
                    {{--<a href="#">Fase de planificación</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Fase de descubrimiento</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Fase de ataque</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Fase de reporte</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--@endif--}}
{{--@else--}}

    {{--<li>--}}
        {{--<a href="{{ route('course', $usuario->unity_id) }}"><i class="fa fa-mortar-board"></i> <span class="nav-label">Cursos</span></a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<a href="{{ route('topic', $usuario->unity_id) }}"><i class="fa fa-book"></i> <span class="nav-label">Materias o Periodos</span></a>--}}
    {{--</li>--}}

{{--@endif--}}

{{--<li>--}}
    {{--<a href="{{ route('cambiarPassword') }}"><i class="fa fa-chain"></i> <span class="nav-label">Cambiar Contraseña</span></a>--}}
{{--</li>--}}

{{--@if($usuario->role == 'admin')--}}

    {{--<li>--}}
        {{--<a href="#"><i class="fa fa-print"></i> <span class="nav-label">Reportes</span></a>--}}
        {{--<ul class="nav nav-second-level">--}}
            {{--<li>--}}
                {{--<a href="{{ route('getBusquedaBajas') }}">Bajas</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</li>--}}

{{--@endif--}}