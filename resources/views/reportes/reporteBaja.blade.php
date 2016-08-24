<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Reporte de Bajas</title>
    {!! Html::style('css/bootstrap.min.css') !!}
</head>

<body>
<div>
    <div>
        <table width="100%">
            <tr>
                <td width="40%" align="center" style="font-size: 10pt">
                    Departamento VI "Educación, Enseñanzas, Institutos Navales y Doctrina" <br>
                    Armada Boliviana <br>
                    Bolivia
                </td>
                <td width="60%"></td>
            </tr>
        </table>
    </div>
    <div>
        <p align="center" style="font-size: 16pt">
            <b><ins>Reporte de Bajas</ins></b>
        </p>
        <br>
        <p align="left" style="font-size: 12pt">
            <b>Unidad:</b> {{ $unidad }}
        </p>
        <p align="left" style="font-size: 12pt">
            <b>Curso o Módulo:</b> {{ $curso }}
        </p>
    </div>
    <div>
        <table width="100%" border="1">
            <tr style="font-size: 10pt">
                <th style="text-align: center">&nbsp;#&nbsp;</th>
                <th style="text-align: center" width="40%">&nbsp;Grado y Nombres&nbsp;</th>
                <th style="text-align: center">&nbsp;Motivo&nbsp;</th>
                <th style="text-align: center">&nbsp;Detalle&nbsp;</th>
            </tr>
            <?php $num = 1; ?>
            @foreach($listaBajas as $bajista)
            <tr style="font-size: 10pt">
                <td style="align-content: center">&nbsp; {{ $num }} &nbsp;</td>
                <td>
                    &nbsp;
                    {{ $bajista->grade }}
                    {{ $bajista->especialty }}
                    {{ $bajista->paterno }}
                    {{ $bajista->materno }}
                    {{ $bajista->nombres }}
                </td>
                <td style="align-content: center">&nbsp; {{ $bajista->topic }}</td>
                <td style="align-content: center">&nbsp; {{ $bajista->nota }}</td>
            </tr>
            <?php $num++; ?>
            @endforeach
        </table>
    </div>
    <div>
        <p style="text-align: justify; font-size: 8pt">
            NOTA: Este documento queda nulo y sin validez si presenta raspaduras, alteraciones,
            anotaciones o enmiendas
        </p>
    </div>
</div>
</body>
</html>