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
                                <button type="button" class="btn btn-primary waves-effect waves-light btn-lg m-b-5" data-toggle="modal" data-target="#add_modal_services">
                                    Nuevo Servicio
                                </button></h4>
                                <!-- Modal -->
                                <div class="modal fade" id="add_modal_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <label for="exampleInputEmail1">AGREGAR SERVICIO</label>

                                        </div>
                                        <div class="modal-body">
                                            <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                <div>
                                                    Código :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" id="lastname" name="lastname" type="text">
                                                    </div><br>

                                                    Nombres :
                                                    <div class="input-group col-md-12">
                                                       <input class="form-control" id="lastname" name="lastname" type="text">
                                                    </div><br>

                                                    Apellidos :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" id="lastname" name="lastname" type="text">
                                                    </div><br>

                                                    Unitario :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" id="lastname" name="lastname" type="text">
                                                    </div><br>
                                                    Área clínica :
                                                    <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">HON QX-Quirúrgicos</option>
                                                            <option value="2">Cons Tópicos</option>
                                                            <option value="3">Proced-Procedimientos Clínicos</option>
                                                            <option value="4">Labor-Laboratorio</option>
                                                            <option value="5">RX x-Rayos X</option>
                                                            <option value="6">ECO-Ecografías</option>
                                                            <option value="7">TAC-Tomografía axial computarizada</option>
                                                            <option value="8">Odonto-Procedimientos odontológicos</option>
                                                            <option value="9">Farmacia</option>
                                                        </select>
                                                    </div><br>
                                                    Área Contable :
                                                    <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">HONORARIOS Y PROCEDIMIENTOS MÉDICOS</option>
                                                        </select>
                                                    </div><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary" name="boton_guardar">Guardar</button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        <!--end modal-->

                        <!-- Modal document_identity_code-->
                        <div class="modal fade" id="edit_modal_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <label for="exampleInputEmail1">AGREGAR SERVICIO</label>

                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                        <div>
                                            Código :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" id="lastname" name="lastname" type="text">
                                            </div><br>

                                            Nombres :
                                            <div class="input-group col-md-12">
                                               <input class="form-control" id="lastname" name="lastname" type="text">
                                            </div><br>

                                            Apellidos :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" id="lastname" name="lastname" type="text">
                                            </div><br>

                                            Unitario :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" id="lastname" name="lastname" type="text">
                                            </div><br>
                                            Área clínica :
                                            <div class="input-group col-md-12">
                                                <select name="opcion" class="form-control">
                                                    <option value="1">HON QX-Quirúrgicos</option>
                                                    <option value="2">Cons Tópicos</option>
                                                    <option value="3">Proced-Procedimientos Clínicos</option>
                                                    <option value="4">Labor-Laboratorio</option>
                                                    <option value="5">RX x-Rayos X</option>
                                                    <option value="6">ECO-Ecografías</option>
                                                    <option value="7">TAC-Tomografía axial computarizada</option>
                                                    <option value="8">Odonto-Procedimientos odontológicos</option>
                                                    <option value="9">Farmacia</option>
                                                </select>
                                            </div><br>
                                            Área Contable :
                                            <div class="input-group col-md-12">
                                                <select name="opcion" class="form-control">
                                                    <option value="1">HONORARIOS Y PROCEDIMIENTOS MÉDICOS</option>
                                                </select>
                                            </div><br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary" name="boton_guardar">Guardar</button>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                        <!--fin modal edit -->
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
            function open_modal(origen){
                 if(origen == 'edit_services'){
                   $("#edit_modal_services").modal('show');
                 }
            }
            function load_data(page = null,object = null){
                    $('.panel-body').slideUp(1000);
                    if(object != null){ data = object.val(); }else{data = null;}
                    $.ajax(
                              {
                                  url: "{{ url('/servicesAPI/') }}/{\"data\": \""+data+"\"}?page="+page,
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
