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
        <link href="/assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="/assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">

        <script src="/assets/js/modernizr.min.js"></script>

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
                                    <li><a href="{{ url('/') }} ">{{ $system_name }}</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right"><img src="/assets/images/logo.png"  width="250" height="70" alt="CSLuren"></h4>
                                                
                                            </div>
                                            <div class="pull-right">
                                                <h4>Atención <br>
                                                Autorización <br>
                                                Código Interno 
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                    <p><strong>Tipo: </strong>  </p>
                                                    <p class="m-t-10"><strong>Paciente: </strong> </p>
                                                    <p class="m-t-10"><strong>Titular: </strong></p>
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Fecha: </strong> </p>
                                                    <p class="m-t-10"><strong>Empresa: </strong> </p>
                                                    <p class="m-t-10"><strong>Cubierto al: </strong> </p>
                                                </div>
                                                <div class="pull-left m-t-30">
                                                            <div class="col-md-4">
                                                            <label class="col-md-4 control-label" for="name"> Tipo de producto </label>
                                                                <select class="form-control" id="pay_type" name="pay_type"><option value="">Seleccione el tipo de Pago</option><option value="1" selected>Efectivo</option></select></p>

                                                            </div>

                                                            <div class="col-md-4">
                                                            <label class="col-md-4 control-label" for="name"> Elige el producto </label>
                                                            <select class="form-control" id="pay_type" name="pay_type"><option value="">Seleccione el tipo de Pago</option><option value="1" selected>Efectivo</option></select></p>
                                                                
                                                            </div>
                                                                <div class="col-md-4">
                                                                <label class="col-md-2 control-label" for="name"> Exento Impuestos </label>
                                                               <select class="form-control" id="pay_type" name="pay_type"><option value="1" selected>No exonerado de impuestos</option><option value="1" selected>Exonerado de impuestos</option></select></p>
                                                                </div>
                                                           

                                                                <div class="col-md-2">
                                                                <label class="col-md-3 control-label" for="name"> Descuento</label>
                                                                
                                                                    <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">NOOO</button>
                                                                
                                                                    
                                                                </div>
                                                                <div class="col-md-3">
                                                                <label class="col-md-2 control-label" for="name"> Cantidad</label>
                                                                    <input name="cantidad" type="text" class="form-control" value="1">
                                                                </div>
                                                                <div class="col-md-3">
                                                                <label class="col-md-2 control-label" for="name"> C/u</label>
                                                                    <input name="unitary" type="text" class="form-control" value="">
                                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                                                <div class="panel-body">
                                    
                                        <form class="form-inline" role="form">
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">                                            </div>
                                              
                                            
                                             
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">Eliminar Venta</button>
                                             <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">Agregar Producto</button>
                                        </form>
                                    </div>  
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Item</th>
                                                            <th>Cantidad</th>
                                                            <th>Precio U.</th>
                                                            <th>Importe</th>
                                                            <th></th>
                                                        </tr></thead>
                                                        <tbody id="list-content">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius: 0px">
                                            <div id="totales" class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Descuento :</b>0.00</p>
                                                <p class="text-right"><b>Op. Gravada:</b> 0.00</p>
                                                <p class="text-right"><b>Op. No Gravada:</b> 0.00</p>
                                                <p class="text-right"><b>Op. Exonerada:</b> 0.00</p>
                                                <p class="text-right"><b>Subtotal:</b> 0.00</p>
                                                <p class="text-right"><b>IGV (18%) :</b> 0.00</p>
                                                <hr>
                                                <h3 class="text-right">S./ 0.00</h3>
                                            </div>
                                        </div>
                                        <hr>
                                                                    <div id="payments_options" class="pull-left text-left col-md-4">
                                                                            <p><strong>Tipo de Pago:</strong> <select class="form-control" id="pay_type" name="pay_type"><option value="">Seleccione el tipo de Pago</option><option value="1" selected>Efectivo</option></select></p>
                                                                            <p><strong>Tipo de Documento: </strong> <select class="form-control" id="pay_edocument_type" name="pay_edocument_type"><option value="">Seleccione el tipo de Documento</option><option value="1" selected>Boleta Paciente</option><option value="3">Boleta DNI</option><option value="4">Boleta No DNI</option><option value="2">Factura RUC</option></select></p>
                                                                            <p style="display: none;"><strong>RUC :</strong><input id="ruc" name="ruc" type="text" class="form-control"> </p>
                                                                            <p style="display: none;"><strong>DNI :</strong><input id="dni" name="dni" type="text" class="form-control"> </p>
                                                                            <p><strong>Vista de Impresión: </strong> <select class="form-control" id="pay_edocument_view" name="pay_edocument_view><option value="">Seleccione la visa de Impresión</option><option value="1">Ticketera</option><option value="2" selected>Media Hoja</option></select></p>
                                                                    </div>
                                        <div class="hidden-print">
                                            <div class="pull-right"><br><br><br><br><br><br><br><br>
                                                <a id="print-button" href="#" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-print"></i> <span>Vista previa</span></a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

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

        <script src="/assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            function load_data(page = null,object = null){
                    $('.panel-body').slideUp(1000);
                    if(object != null){ data = object.val(); }else{data = null;}
                    $.ajax(
                              {
                                  url: "{{ url('/authorizationsAPI/') }}/{\"data\": \""+data+"\", \"from\": \"triaje\"}?page="+page, 
                                  method: "GET",
                                   success: function(result)
                                  {
                                    $('.panel').html(result).fadeIn(1000).children(".panel-body").fadeIn(1000);

                                    $("#search").keypress(function(e) {
                                        if(e.which == 13) {
                                            load_data(page, $(this));
                                        }
                                    });

                                        $('[data-toggle="tooltip"]').tooltip();
                                  }
                    });
            }

            jQuery(document).ready(function($) {
                jQuery('#datepickera').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                        numberOfMonths: 3,
                        showButtonPanel: true
                });

                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15})
            });
        </script>

    
    </body>
</html>