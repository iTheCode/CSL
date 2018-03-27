<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - {{ $system_name }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <link href="/assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/assets/plugins/morris.js/morris.css">

        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="/assets/js/modernizr.min.js"></script>

        <link href="/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
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
                        <a href="index.html" class="logo"><img src="/assets/images/icono.png" alt="CSLuren" width="30" height="30"> <span>{{ $system_name }} </span></a>
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
                                    <li><a href="#">{{  $system_name }}</a></li>
                                    <li class="active">Atenciones</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                       <div class="" style="">
                                        <div class="panel" style="margin:0 auto;width:450px">
                                            <div class="panel-body">
                                                <div class="media-main">
                                                    <div class="btn-group-sm">
                                                    <h4>Generar Reporte</h4>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr>
                                                <div>
                                                    Cobertura
                                                    <div class="input-group col-md-12">
                                                        {{ Form::select('coverage_type', [null=>'Seleccione una cobertura'] + $coverages , null, ['class' => 'select2 form-control']) }}
                                                    </div><br><br>
                                                    Fecha de Inicio
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="date_init" class="form-control datepicker" placeholder="yyyy-mm-dd">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><br><br>
                                                    Fecha Fin
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="date_end" class="form-control datepicker" placeholder="yyyy-mm-dd">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><br><br>
                                                    Tipo de Documento
                                                    <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Facturas Electrónicas</option>
                                                            <option value="2">Boletas Electrónicas</option>
                                                        </select>
                                                        <!--{{ Form::select('pay_document_type_id', [null=>'Seleccione un Tipo de Documento'] + $type_documents , null, ['class' => 'select2 form-control']) }}-->
                                                    </div><br><br>
                                                    Admisionista
                                                    <div class="input-group col-md-12">
                                                        {{ Form::select('employee', [null=>'Seleccione una admisionista'] + $employees , null, ['class' => 'select2 form-control']) }}
                                                    </div><br><br>
                                                </div>
                                                <div class="pull-right"><br>
                                                    <button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5">Generar</button>
                                                </div>
                                            </div> <!-- panel-body -->
                                        </div> <!-- panel -->
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div> <!-- End row -->


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
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/detect.js"></script>
        <script src="/assets/js/fastclick.js"></script>
        <script src="/assets/js/jquery.slimscroll.js"></script>
        <script src="/assets/js/jquery.blockUI.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/jquery.nicescroll.js"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>

        <script src="/assets/js/jquery.app.js"></script>
        
        <!-- jQuery  -->
        <script src="/assets/plugins/moment/moment.js"></script>
        
        <!-- jQuery  -->
        <script src="/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="/assets/plugins/counterup/jquery.counterup.min.js"></script>
        
        <!-- jQuery  -->
        <script src="/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        

        <!-- jQuery  -->
        <script src="/assets/pages/jquery.todo.js"></script>
        
        <!-- jQuery  -->
        <script src="/assets/pages/jquery.chat.js"></script>
        
        <!--Morris Chart-->
        <script src="/assets/plugins/raphael/raphael-min.js"></script>
        
        <script src="/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        
        <script type="text/javascript">
            $('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
            function date_now_format() {
              now = new Date();
              year = "" + now.getFullYear();
              month = "" + (now.getMonth() + 1); if (month.length == 1) { month = "0" + month; }
              day = "" + now.getDate(); if (day.length == 1) { day = "0" + day; }
              hour = "" + now.getHours(); if (hour.length == 1) { hour = "0" + hour; }
              minute = "" + now.getMinutes(); if (minute.length == 1) { minute = "0" + minute; }
              second = "" + now.getSeconds(); if (second.length == 1) { second = "0" + second; }
              return year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
            }
            $('#generate').submit(function(e){
                e.preventDefault();
                var form = $(this);
                $.ajax(
                {
                    url: "{{ url('/caja/generar_reporte/') }}", 
                    method: "GET",
                    data: form.serialize(),
                    success: function(response, status, xhr) {
                            // check for a filename
                            var filename = "atenciones_"+date_now_format();
                            var disposition = xhr.getResponseHeader('Content-Disposition');
                            if (disposition && disposition.indexOf('attachment') !== -1) {
                                var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                var matches = filenameRegex.exec(disposition);
                                if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                            }

                            var type = xhr.getResponseHeader('Content-Type');
                            var blob = new Blob([response], { type: type });

                            if (typeof window.navigator.msSaveBlob !== 'undefined') {
                                // IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                                window.navigator.msSaveBlob(blob, filename);
                            } else {
                                var URL = window.URL || window.webkitURL;
                                var downloadUrl = URL.createObjectURL(blob);

                                if (filename) {
                                    // use HTML5 a[download] attribute to specify filename
                                    var a = document.createElement("a");
                                    // safari doesn't support this yet
                                    if (typeof a.download === 'undefined') {
                                        window.location = downloadUrl;
                                    } else {
                                        a.href = downloadUrl;
                                        a.download = filename;
                                        document.body.appendChild(a);
                                        a.click();
                                    }
                                } else {
                                    window.location = downloadUrl;
                                }

                                setTimeout(function () { URL.revokeObjectURL(downloadUrl); }, 100); // cleanup
                            }
                        },
                    complete: function(){
                        $.address.value("/caja/atenciones");
                    }
                });
                return false;

            });
        </script>

    
    </body>
</html>



