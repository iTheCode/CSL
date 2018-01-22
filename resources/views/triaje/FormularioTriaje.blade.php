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
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Triaje</h4>
                                
                            </div>
                        </div>
                        <!-- end row -->
     
                            <div class="col-lg-6"> 
                                <ul class="nav nav-tabs tabs tabs-top">
                                    <li class="active tab">
                                        <a href="#home-21" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                            <span class="hidden-xs">Datos Generales</span> 
                                        </a> 
                                    </li> 
                                    <li class="tab"> 
                                        <a href="#profile-21" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                            <span class="hidden-xs">Perfil del Paciente</span> 
                                        </a> 
                                    </li> 
                                    <li class="tab"> 
                                        <a href="#messages-21" data-toggle="tab" aria-expanded="true"> 
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                            <span class="hidden-xs">Tratamiento</span> 
                                        </a> 
                                    </li> 
                                    <li class="tab"> 
                                        <a href="#settings-21" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">Referencias</span> 
                                        </a> 
                                    </li> 
                                </ul> 
                                <div class="tab-content"> 
                                    <div class="tab-pane active" id="home-21"> 
                                    <div class="panel-body">
                                        <div class="form">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Número de historia clínica</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="N° historia">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Nombre del paciente</label>
                                                <input  class="form-control" id="exampleInputPassword1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Apellidos del paciente</label>
                                                <input  class="form-control" id="exampleInputPassword1" placeholder="">
                                            </div>
                                            <label>Fecha de atención</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div><!-- input-group -->
                                            <br>
                              
                                            <label>Calendario Actual</label>
                                            <div class="input-group mb15">
                                                <div id="datepicker-inline"></div>
                                            </div><!-- input-group -->
                                            <br>
                                            <label>Hora de atención</label>
                                            <div class="input-group m-b-15">
                                    
                                            <div class="bootstrap-timepicker"><input id="timepicker" type="text" class="form-control"></div>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                            </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                        <button class="btn btn-default waves-effect" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>		
                            				
                                        
                                    </div> 
                                    <div class="tab-pane" id="profile-21">

                        <!-- Form-validation -->
                        
                        
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                <div class="form-group">
                                                    <label for="firstname" class="control-label col-lg-2">Enfermedad Actual</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastname" class="control-label col-lg-2">Tiempo de enfermedad</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="lastname" name="lastname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Motivo de consulta</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="username" name="username" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Sintomas y signos principales</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Funciones Biológicas</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Examen Físico</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Funciones vitales (P.A - FC - FR - T° - Sat.O2 - peso - talla)</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" placeholder="P.A , FC , FR , T° , Sat.O2 , peso , talla" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Examen General</label>
                                                    <div class="col-lg-10">
                                                       <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Examen Regional</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Antecedentes: Personales y familiares</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Diagnóstico presuntivo (motivo de la consulta - utiliza CIE-10):
                                                    </label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                    <label for="email" class="control-label col-lg-2">Diagnóstico definitivo (Dx de Salud Mental, Dx nutricional, Dx de causa externa de morbilidad.):
                                                    </label>
                                                    <div class="col-lg-10">
                                                       <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>

                                                    
                                                    
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Exámenes de ayuda diagnóstica</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                
                                            

                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                        <button class="btn btn-default waves-effect" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->

                                    </div> <!-- panel-body -->
                                   </div> 
                                    <div class="tab-pane" id="messages-21">
                                         <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                <div class="form-group">
                                                    <label for="firstname" class="control-label col-lg-2">Plan de trabajo</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastname" class="control-label col-lg-2">Interconsultas</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="lastname" name="lastname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Procedimientos especiales</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="username" name="username" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Tratamiento</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                        <button class="btn btn-default waves-effect" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->

                                    </div> <!-- panel-body -->
                                   </div> 
                                    
                                    <div class="tab-pane" id="settings-21">
                                        <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                <div class="form-group">
                                                    <label for="firstname" class="control-label col-lg-2">Referencia a otro establecimiento</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastname" class="control-label col-lg-2">Nombres y Apellidos de quien realiza la atención</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="lastname" name="lastname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Fecha de la proxima cita</label>
                                                    
                                					<div class="input-group">
                                   						<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple">
                                    					<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                					</div><!-- input-group -->
                                				
                              
                              			  			
                                                <br>

                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                        <button class="btn btn-default waves-effect" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->

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