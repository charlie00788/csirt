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
                        {!! QrCode::size(100)->generate($aspirante->id.'/'.$nuevoDocumento->id.'/'.$nuevoDocumento->year) !!}
                    </td>
                    <td width="50%" align="right">
                        <i>
                            Div. "L" No. {{ $nuevoDocumento->numero }}/{{ $nuevoDocumento->year }}
                        </i></td>
                </tr>
            </table>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <div>
            <p align="center" class="h3">
                <i>
                    {{ $aspirante->paterno }}
                    {{ $aspirante->materno }}
                    {{ $aspirante->nombres }}
                    &nbsp;&nbsp;&nbsp;
                    C.I. {{ $aspirante->id }} {{ $aspirante->city_id }}
                </i>
            </p>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <div>
            <p align="right">
                <i>
                    La Paz,
                    {{ $nuevoDocumento->month->month }}
                    {{ $nuevoDocumento->dia }}
                    de
                    {{ $nuevoDocumento->year }}
                </i>
            </p>
        </div>
        <br><br><br>
        {{--<div>--}}
            {{--<table width="100%">--}}
                {{--<tr>--}}
                    {{--<td width="50%" align="center">--}}
                        {{--<i>--}}
                            {{--{{ $nuevoDocumento->cargo1->grade->grade }}--}}
                            {{--{{ $nuevoDocumento->cargo1->especialty->especialty }}--}}
                            {{--{{ $nuevoDocumento->cargo1->person->paterno }}--}}
                            {{--{{ $nuevoDocumento->cargo1->person->materno }}--}}
                            {{--{{ $nuevoDocumento->cargo1->grade->nombres }}--}}
                        {{--</i>--}}
                    {{--</td>--}}
                    {{--<td width="50%" align="center">--}}
                        {{--<i>--}}
                            {{--{{ $nuevoDocumento->cargo2->grade->grade }}--}}
                            {{--{{ $nuevoDocumento->cargo2->especialty->especialty }}--}}
                            {{--{{ $nuevoDocumento->cargo2->person->paterno }}--}}
                            {{--{{ $nuevoDocumento->cargo2->person->materno }}--}}
                            {{--{{ $nuevoDocumento->cargo2->grade->nombres }}--}}
                        {{--</i>--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--</table>--}}
        {{--</div>--}}
        <br><br><br>
        {{--<div>--}}
            {{--<p align="center">--}}
                {{--<i>--}}
                    {{--{{ $nuevoDocumento->cargo3->grade->grade }}--}}
                    {{--{{ $nuevoDocumento->cargo3->especialty->especialty }}--}}
                    {{--{{ $nuevoDocumento->cargo3->person->paterno }}--}}
                    {{--{{ $nuevoDocumento->cargo3->person->materno }}--}}
                    {{--{{ $nuevoDocumento->cargo3->person->nombres }}--}}
                {{--</i>--}}
            {{--</p>--}}
        {{--</div>--}}
    </div>
</body>
</html>