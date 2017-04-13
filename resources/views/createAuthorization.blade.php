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

        <link rel="stylesheet" type="text/css" href="/assets/plugins/jquery.steps/demo/css/jquery.steps.css">

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
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Registrar Autorización</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">{{ $system_name }}</a></li>
                                    <li class="active">Nuevo Paciente</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Nueva Atención</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form id="basic-form" action="#">
                                            <div>
                                                <h3>Busqueda</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label" for="userName">Nombres de Paciente</label>
                                                        <div class="col-lg-9">
                                                            <input class="form-control required" id="userName" name="userName" type="text" placeholder="Ingrese Nombres del Paciente o Número de DNI">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-12 control-label">Resultados :</label>
                                                    </div>
                                                </section>
                                                <h3>Registro</h3>
                                                <section>
                                                    <div class="form-group clearfix">

                                                        <label class="col-lg-2 control-label" for="name"> First name *</label>
                                                        <div class="col-lg-10">
                                                            <input id="name" name="name" type="text" class="required form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label" for="surname"> Last name *</label>
                                                        <div class="col-lg-10">
                                                            <input id="surname" name="surname" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label" for="email">Email *</label>
                                                        <div class="col-lg-10">
                                                            <input id="email" name="email" type="text" class="required email form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label" for="address">Address *</label>
                                                        <div class="col-lg-10">
                                                            <input id="address" name="address" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-12 control-label">(*) Mandatory</label>
                                                    </div>

                                                </section>
                                                <h3>Detalles</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <ul>
                                                                <li>Jonathan Smith </li>
                                                                <li>Lab</li>
                                                                <li>jonathan@smith.com</li>
                                                                <li>Your city, Cityname</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3>Confirmación</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="checkbox-h" type="checkbox">
                                                                <label for="checkbox-h">
                                                                    I agree with the Terms and Conditions.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </form> 
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

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

        <!-- Main  -->
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

        <!--Form Validation-->
        <script src="/assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="/assets/plugins/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="/assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

    </body>
</html>