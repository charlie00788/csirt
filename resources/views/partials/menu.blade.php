<li>
    <a href="{{ route('getMision') }}"><i class="fa fa-file-text-o"></i> <span class="nav-label">CSIRT EMI</span></a>
</li>

<li>
    <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">Manuales del CSIRT EMI</span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ url('manuales/man1.pdf') }} " target="_blank">Manual de Administracion CSIRT EMI</a>
        </li>
        <li>
            <a href="{{ url('manuales/man2.pdf') }}" target="_blank">Manual de Contingencias CSIRT EMI</a>
        </li>
        <li>
            <a href="{{ url('manuales/man3.pdf') }}" target="_blank">Manual de Políticas de Seguridad CSRIT EMI</a>
        </li>
    </ul>
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