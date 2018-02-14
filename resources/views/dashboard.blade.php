<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - {{ $system_name }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/plugins/morris.js/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar ">
                <!-- LOGO -->
                <div class="topbar-left bg-success">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="assets/images/icono.png" alt="CSLuren" width="30" height="30"> <span>{{ $system_name }} </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default bg-success" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Buscar por Número DNI">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                @include('menu')
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">

                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb pull-right">
                                    <li><a href="{{ url('/') }} ">{{ $system_name }}</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <!--Widget-4 -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-white">
                                    <span class="mini-stat-icon bg-info"><i class="ion-arrow-graph-up-right"></i></span>
                                    <div class="mini-stat-info text-right text-dark">
                                        <span class="counter text-dark">{{ $atenciones_mes }}</span>
                                        Atenciones
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Este Mes <span class="pull-right">{{ $porcentaje_antenciones_mes }}%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $porcentaje_antenciones_mes }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $porcentaje_antenciones_mes }}%">
                                                    <span class="sr-only">{{ $porcentaje_antenciones_mes }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-white">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-pulse"></i></span>
                                    <div class="mini-stat-info text-right text-dark">
                                        <span class="counter text-dark">{{ $emergencias_mes }}</span>
                                        Emergencias
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">ESTE MES <span class="pull-right">{{ $porcentaje_emergencias_mes }}%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="{{ $porcentaje_emergencias_mes }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $porcentaje_emergencias_mes }}%">
                                                    <span class="sr-only">{{ $porcentaje_emergencias_mes }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-white">
                                    <span class="mini-stat-icon bg-success"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-dark">
                                        <span class="counter text-dark">{{ $pacientes_nuevos_mes}}</span>
                                        Pacientes Nuevos
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">ESTE MES <span class="pull-right">{{ $porcentaje_pacientes_mes }}%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $porcentaje_pacientes_mes }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $porcentaje_pacientes_mes }}%">
                                                    <span class="sr-only">{{ $porcentaje_pacientes_mes }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-white">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-document"></i></span>
                                    <div class="mini-stat-info text-right text-dark">
                                        <span class="counter text-dark">{{ $pay_documents_mes}}</span>
                                        Documentos
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">ESTE MES <span class="pull-right">{{ $porcentaje_pay_documents_mes }}%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $porcentaje_pay_documents_mes }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $porcentaje_pay_documents_mes }}%">
                                                    <span class="sr-only">{{ $porcentaje_pay_documents_mes }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-body">
                                        <div class="legend"><div style="position: absolute; width: 284px; height: 16px; top: 4px; right: 10px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:4px;right:10px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(0,177,157);overflow:hidden"></div></div></td><td class="legendLabel">Atenciones Actuales&nbsp;&nbsp;</td><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(126,87,194);overflow:hidden"></div></div></td><td class="legendLabel">Atenciones Anteriores&nbsp;&nbsp;</td></tr></tbody></table></div>
                                        <canvas id="lineChart" data-type="Line" width="520" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row-->
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    {{ $this_year}} © {{ $system_name }}
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        
        <script src="assets/js/jquery.app.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/moment/moment.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        

        <!-- jQuery  -->
        <script src="assets/pages/jquery.todo.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/pages/jquery.chat.js"></script>
        
        <script src="assets/plugins/Chart.js/Chart.min.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/pages/jquery.dashboard.js"></script>
        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                !function($){
                    "use strict";
                    var ChartJs=function(){};
                    ChartJs.prototype.respChart=function respChart(selector,type,data,options){
                        var ctx=selector.get(0).getContext("2d");
                        var container=$(selector).parent();
                        $(window).resize(generateChart);
                        function generateChart(){
                            var ww=selector.attr('width',$(container).width());
                            switch(type){
                                case'Line':
                                    new Chart(ctx).Line(data,options);
                                    break;
                                case'Doughnut':
                                    new Chart(ctx).Doughnut(data,options);
                                    break;
                                case'Pie':
                                    new Chart(ctx).Pie(data,options);
                                    break;
                                case'Bar':
                                    new Chart(ctx).Bar(data,options);
                                    break;
                                case'Radar':
                                    new Chart(ctx).Radar(data,options);
                                    break;
                                case'PolarArea':
                                    new Chart(ctx).PolarArea(data,options);
                                    break;
                            }
                        };
                        generateChart();
                    },
                    ChartJs.prototype.init=function(){
                        var data={
                                    labels:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre"],
                                    datasets:[
                                            {
                                                fillColor:"rgba(94, 53, 114, 0.3)",
                                                strokeColor:"rgba(94, 53, 114, 1)",
                                                pointColor:"rgba(94, 53, 114, 1)",
                                                pointStrokeColor:"#fff",
                                                data:[@foreach($chart_pasado as $data) {{ $data['count'] or 0}}, @endforeach]
                                            },{
                                                fillColor:"rgba(0, 177, 157, 0.5)",
                                                strokeColor:"#00b19d",
                                                pointColor:"#00b19d",
                                                pointStrokeColor:"#fff",
                                                data:[@foreach($chart_pasado as $key => $data) {{ $chart_actual[$key]['count'] or 0}}, @endforeach]
                                            }]
                                };
                        this.respChart($("#lineChart"),'Line',data);
                    },
                    $.ChartJs=new ChartJs,$.ChartJs.Constructor=ChartJs}(window.jQuery),function($){"use strict";$.ChartJs.init()}(window.jQuery);
            });
        </script>

    
    </body>
</html>