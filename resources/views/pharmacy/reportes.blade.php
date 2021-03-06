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

        <link href="/assets/plugins/fullcalendar/dist/fullcalendar.css" rel="stylesheet">
        <link href="/assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css">

        <!--timepicker-->
        <link rel="stylesheet" type="text/css" href="/assets/plugins/timepicker/bootstrap-timepicker.min.css">

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
           
                <!-- Start content -->
                 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        
                        <!-- end row -->
     
                            <div class="col-sm-12"> 
                                <ul class="nav nav-tabs tabs tabs-top">
                                    <li class="active tab">
                                        <a href="#home-21" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                            <span class="hidden-xs">Generar Reporte</span> 
                                        </a> 
                                    </li> 
                                    <li class="tab"> 
                                        <a href="#profile-21" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                            <span class="hidden-xs">Vista Reporte</span> 
                                        </a> 
                                    </li> 
                                   
                                </ul> 
                                <div class="tab-content"> 
                                    <div class="tab-pane active" id="home-21"> 
                                    <div class="panel-body">
                                        <div class="form">
                                            
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
                                                    Fecha de Inicio
                                                    <div class="input-group col-md-12">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><br><br>
                                                    Fecha Fin
                                                    <div class="input-group col-md-12">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><br><br>
                                                    Tipo de Producto
                                                    <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Analgésicos</option>
                                                            <option value="2">Otros</option>
                                                        </select>
                                                    </div><br><br>
                                                    Precio inicio
                                                    <div class="input-group col-md-12">
                                                         <input type="text" class="form-control" placeholder="00.00" id="datepicker">
                                                        
                                                    </div><br><br>
                                                    Precio fin
                                                    <div class="input-group col-md-12">
                                                         <input type="text" class="form-control" placeholder="00.00" id="datepicker">
                                                       
                                                    </div>

                                                    <!--Tipo de Documento
                                                    <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Facturas</option>
                                                            <option value="2">Boletas</option>
                                                            <option value="2">Notas de Crédito</option>
                                                        </select>
                                                    </div><br><br>-->
                                                    
                                                </div>
                                                <div class="pull-right"><br>
                                                    <button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5">Generar</button>
                                                </div>
                                            </div> <!-- panel-body -->
                                        </div> <!-- panel -->
                                            
                                                
                                        </div>
                                    </div>		
                            				
                                        
                                    </div> 

                                    <div class="tab-pane" id="profile-21">

                        <!-- Form-validation -->
                        
                        
                                    <div class="panel-body">
                                        <div class="form">
                                            <div class="panel panel-default panel-fill">
                                        <div class="panel-heading"> 
                                        <h3 class="panel-title">Tabla de reportes</h3> 
                                        </div> 
                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Código</th>
                                                                        <th>Cantidad</th>
                                                                        <th>Precio</th>
                                                                        <th></th>
                                                                        <th>Unitario</th>
                                                                        <th>Monto</th>
                                                                        <th>Copago</th>
                                                                        <th>Correlativo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                                                
                                                                        
                                                                </tbody>
                                                            </table>
                                                        </div>

                                    </div> 
                                   
                                    <div class="hidden-print">
                                            <div class="pull-right"><br><br><br><br><br><br><br><br>
                                                <a id="print-button" href="#" class="btn btn-default waves-effect m-b-5"> <span>Cancel</span></a>
                                                <a id="print-button" href="#" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-print"></i> <span>Imprimir</span></a>
                                            </div>  
                                        </div>
                                        </div> <!-- .form -->

                                    </div> <!-- panel-body -->
                                    </div> 
                                  

                                </div> 
                                
                            </div> 
                        
                         <!-- end row -->

                        

                    </div> <!-- container -->
                               
               
                

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ==========================

                </div> <!-- container -->
                               
                </div> <!-- content -->
                <footer class="footer text-right">
                    {{ $this_year}} © {{ $system_name }}
                </footer>
            	</div>

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
        <script src="/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="/assets/plugins/counterup/jquery.counterup.min.js"></script>
        <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <!-- jQuery  -->
        <script src="/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        
  
        <script src="/assets/plugins/fullcalendar/dist/moment.min.js"></script>
        <script src="/assets/plugins/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="/assets/plugins/fullcalendar/dist/es.js"></script>
        <script src="/assets/pages/jquery.fullcalendar.js"></script>

        <script type="text/javascript" src="/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
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