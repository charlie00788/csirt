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
                        <h2>Historial de Notificaciones</h2>
                        <span>Histórico</span>
                    </div>
                </div>

                <div class="ibox-title">
                    <h2>Historial de Notificaciones</h2>
                </div>
                <div class="ibox-content">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="flot-chart">
                                    <div class="flot-chart-pie-content" id="flot-pie-chart" style="width:600px;height:300px"></div>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.time.js') }}"></script>

@endsection

@section('javascript')

    <script type="text/javascript">

    $(document).ready(function() {
        $(function() {

            var data = [{
                label: "Acceso no autorizado",
                data: 21,
                color: "#d3d3d3",
            }, {
                label: "Código malicioso",
                data: 3,
                color: "#bababa",
            }, {
                label: "Denegación de servicios",
                data: 15,
                color: "#79d2c0",
            }, {
                label: "Mal uso de recursos tecnológicos",
                data: 52,
                color: "#1ab394",
            }];

            var plotObj = $.plot($("#flot-pie-chart"), data, {
                series: {
                    pie: {
                        show: true
                    }
                },
                grid: {
                    hoverable: true
                },
                tooltip: true,
                tooltipOpts: {
                    content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                    shifts: {
                        x: 20,
                        y: 0
                    },
                    defaultTheme: false
                }
            });

        });

    });

    </script>

@endsection