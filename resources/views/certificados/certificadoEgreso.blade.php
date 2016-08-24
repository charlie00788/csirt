<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Certicado</title>
    {!! Html::style('css/bootstrap.min.css') !!}
</head>

<body>
<div>
    <br><br><br><br><br><br><br>
    <div>
        <table width="100%">
            <tr>
                <td width="50%">
                    {!! QrCode::size(100)->generate($kardex->id.'/'.$kardex->person_id) !!}
                </td>
                <td width="50%" align="right">
                    Div. "H" No. {{ $nuevoDocumento->numero }}/{{ $nuevoDocumento->year }}
                </td>
            </tr>
        </table>
    </div>

    <div>
        <table align="center" width="100%">
            <tr>
                <td width="30%">Extendido al Señor:</td>
                <td width="70%" style="font-size: large">
                    {{ $kardex->nombre_completo }}
                </td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <table width="100%" frame="void" rules="rows">
            <tr align="center" style="font-size: large">
                <td width="20%" >{{ $kardex->person_id .' '. $kardex->person->city_id }}</td>
                <td width="20%">{{ $kardex->person->tin }}</td>
                <td width="60%">{{ $kardex->course->unity->unity }}</td>
            </tr>
            <tr align="center">
                <td>C.I.</td>
                @if($kardex->person->tin == "")
                    <td></td>
                @else
                    <td>TIN</td>
                @endif
                <td>Unidad Académica</td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <p style="text-align: justify">
            Las calificaciones han sido obtenidas del Libro Matriz del Periodo Lectivo
            "{{ $kardex->course->course }}" de la
            gestión académica {{ $kardex->year }}, las que están basadas en conformidad al
            Plan de Estudios vigente durante esa gestión.
        </p>
    </div>
    <div>
        <table width="100%" border="1">
            <tr>
                <th style="text-align: center" rowspan="2">DETALLE</th>
                <th style="text-align: center" colspan="2">CALIFICACIONES</th>
                <th style="text-align: center" rowspan="2">OBS.</th>
            </tr>
            <tr>
                <th style="text-align: center">NUMERAL</th>
                <th style="text-align: center">LITERAL</th>
            </tr>
            @foreach($registros as $registro)
                <tr style="font-size: small">
                    <td>&nbsp; {{ $registro->topic->topic }}</td>
                    @if(! is_numeric(substr($registro->nota, 0, 1)))
                        <td colspan="2" align="center">{{ $registro->nota }}</td>
                    @else
                        <td align="center">{{ $registro->nota }}</td>
                        <td>&nbsp; {{ $registro->nota_literal }}</td>
                    @endif
                    <td align="center">---</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <p style="text-align: justify">
            NOTA: Este documento queda nulo y sin validez si presenta raspaduras, alteraciones,
            anotaciones o enmiendas
        </p>
    </div>
    <div>
        <p align="right">
            La Paz,
            {{ $nuevoDocumento->month->month }}
            {{ $nuevoDocumento->dia }}
            de
            {{ $nuevoDocumento->year }}
        </p>
    </div>
    <br><br>
    <div>
        <table width="100%" style="text-align: center">
            <tr>
                <td width="50%">
                    {{ $nuevoDocumento->cargo2->grade->grade }}
                    {{ $nuevoDocumento->cargo2->especialty->especialty }}
                    {{ $nuevoDocumento->cargo2->person->paterno }}
                    {{ $nuevoDocumento->cargo2->person->materno }}
                    {{ $nuevoDocumento->cargo2->person->nombres }}
                </td>
                <td width="50%">
                    {{ $nuevoDocumento->cargo1->grade->grade }}
                    {{ $nuevoDocumento->cargo1->especialty->especialty }}
                    {{ $nuevoDocumento->cargo1->person->paterno }}
                    {{ $nuevoDocumento->cargo1->person->materno }}
                    {{ $nuevoDocumento->cargo1->person->nombres }}
                </td>
            </tr>
            <tr>
                <th style="text-align: center">{{ $nuevoDocumento->cargo2->carguito }}</th>
                <th style="text-align: center">{{ $nuevoDocumento->cargo1->carguito }}</th>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <p style="text-align: center">
            Vo. Bo.
        </p>
    </div>
    <br><br>
    <div>
        <table width="100%" style="text-align: center">
            <tr>
                <td>
                    {{ $nuevoDocumento->cargo3->grade->grade }}
                    {{ $nuevoDocumento->cargo3->especialty->especialty }}
                    {{ $nuevoDocumento->cargo3->person->paterno }}
                    {{ $nuevoDocumento->cargo3->person->materno }}
                    {{ $nuevoDocumento->cargo3->person->nombres }}
                </td>
            </tr>
            <tr>
                <th style="text-align: center">
                    {{ $nuevoDocumento->cargo3->carguito }}
                </th>
            </tr>
        </table>
    </div>
</div>
</body>
</html>