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
                            <div class="col-sm-12"> <h4 class="pull-left page-title"> 
                                <button type="button" class="btn btn-primary waves-effect waves-light btn-lg m-b-5" data-toggle="modal" data-target="#exampleModalCenter">
                                    Nuevo Usuario
                                </button></h4>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <div class="panel-heading"><h3 class="panel-title">AGREGAR USUARIOS</h3></div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                <div class="form-group">
                                                    <label for="firstname" class="control-label col-lg-2">Nombres</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="firstname" name="firstname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastname" class="control-label col-lg-2">Apellidos</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="lastname" name="lastname" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Usuario</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="username" name="username" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Área</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="username" name="username" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="control-label col-lg-2">Contraseña</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="password" name="password" type="password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="confirm_password" class="control-label col-lg-2">Confirma contraseña</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="confirm_password" name="confirm_password" type="password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-lg-2">Correo Electrónico</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="email" name="email" type="email">
                                                    </div>
                                                </div>
                                                <!--<div class="form-group">
                                                <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy *</label>
                                                <div class="col-lg-10 col-sm-9">
                                                    <input type="checkbox" style="width: 16px"  id="agree" name="agree">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Receive the Newsletter</label>
                                                <div class="col-lg-10 col-sm-9">
                                                    <input type="checkbox" style="width: 16px" id="newsletter" name="newsletter">
                                                </div>
                                            </div>
                                            </form>
                                        </div> <!-- .form -->
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <ol class="breadcrumb pull-right">
                               
                                    <li><a href="#">{{  $system_name }}</a></li>
                                    <li class="active">Usuarioss</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default" style="display: none;">

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
        
        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            function load_data(page = null,object = null){
                    $('.panel-body').slideUp(1000);
                    if(object != null){ data = object.val(); }else{data = null;}
                    $.ajax(
                              {
                                  url: "{{ url('/usersAPI/') }}/{\"data\": \""+data+"\"}?page="+page, 
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
            load_data();
            });
        </script>

    
    </body>
</html>