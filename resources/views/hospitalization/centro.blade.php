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
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Widgets</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Components</a></li>
                                    <li class="active">Widgets</li>
                                </ol>
                            </div>
                        </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-white">
                                    <a href="/test" class="text-white"><span class="mini-stat-icon bg-success waves-effect"><i class="fa fa-bed"></i></span></a>
                                    <div class="mini-stat-info text-right text-dark">
                                        <span class="name text-dark">Luis Uculmana</span>
                                        Web Designer
                                    </div>
                                    <br>
                                    <hr class="m-t-10">
                                    <ul class="text-center social-links list-inline m-0">
                                        <div class="text-left">                                      <i class="fa fa-heartbeat fa-2x text-success"></i><span class="pull-right text-muted">5 Days</span>
                                        </div>
                                        <div class="text-left">                                      <i class="fa fa-user-md fa-2x text-success"></i><span class="pull-right text-muted">Dr. Montalvo</span>
                                        </div>
                                        <div class="text-left">                                      <i class="fa fa-folder fa-2x text-success"></i><span class="pull-right text-muted">0 Documentos</span>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow bg-white">
                                    <a href="/test" class="text-white " ><span class="mini-stat-icon bg-info waves-effect"><i class="fa  fa-plus-square"></i></span></a>
                                    <div class="mini-stat-info text-right text-dark">
                                        <span class="name text-dark">Libre</span>
                                        L
                                    </div>
                                    <br>
                                    <hr class="m-t-10">
                                    <ul class="text-center social-links list-inline m-0">
                                        <div class="text-left">                                      <i class="fa fa-heartbeat fa-2x text-info"></i><span class="pull-right text-muted">0 Days</span>
                                        </div>
                                        <div class="text-left">                                      <i class="fa fa-user-md fa-2x text-info"></i><span class="pull-right text-muted">No Asignado</span>
                                        </div>
                                        <div class="text-left">                                      <i class="fa fa-folder fa-2x text-info"></i><span class="pull-right text-muted">No Asignado</span>
                                        </div>
                                    </ul>
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
        
        <!--Morris Chart-->
        <script src="/assets/plugins/raphael/raphael-min.js"></script>
        <script src="/assets/plugins/morris.js/morris.min.js"></script>
        
        <!-- jQuery  -->
        <script src="/assets/pages/jquery.dashboard.js"></script>
        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    
    </body>
</html>