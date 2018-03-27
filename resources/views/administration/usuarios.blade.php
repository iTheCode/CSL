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
                                        <label for="exampleInputEmail1">AGREGAR USUARIO</label>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                <div>
                                                    Nombres :
                                                    <div class="input-group col-md-12">
                                                       <input class="form-control" name="firstname" type="text">
                                                    </div><br>
                                                    Apellido paterno :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" name="paternal" type="text">
                                                    </div><br>
                                                    Apellido materno :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" name="maternal" type="text">
                                                    </div><br>
                                                    Código de usuario :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" name="user_code" type="text">
                                                    </div><br>
                                                    Área asignada :
                                                    <div class="input-group col-md-12">
                                                        <select name="área" class="form-control">
                                                            <option value="1">área 1</option>
                                                            <option value="2">...</option>
                                                        </select>
                                                    </div><br>
                                                    Usuario :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" name="user" type="text">
                                                    </div><br>
                                                    Contraseña :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" name="password" type="password">
                                                    </div><br>
                                                    Confirmar contraseña :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" name="confirm_password" type="password">
                                                    </div><br>
                                                    Correo electrónico :
                                                    <div class="input-group col-md-12">
                                                        <input class="form-control" name="email" type="email">
                                                    </div><br>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary" name="boton_guardar">Guardar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        <!-- modal-delete -->
                                <div class="modal" id="modal_delete" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal document_identity_code-->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <label for="exampleInputEmail1">EDITAR USUARIO</label>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                        <div>
                                            Nombres :
                                            <div class="input-group col-md-12">
                                               <input class="form-control" name="firstname" type="text">
                                            </div><br>
                                            Apellido paterno :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" name="paternal" type="text">
                                            </div><br>
                                            Apellido materno :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" name="maternal" type="text">
                                            </div><br>
                                            Código de usuario :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" name="user_code" type="text">
                                            </div><br>
                                            Área asignada :
                                            <div class="input-group col-md-12">
                                                <select name="área" class="form-control">
                                                    <option value="1">área 1</option>
                                                    <option value="2">...</option>
                                                </select>
                                            </div><br>
                                            Usuario :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" name="user" type="text">
                                            </div><br>
                                            Contraseña :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" name="password" type="password">
                                            </div><br>
                                            Confirmar contraseña :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" name="confirm_password" type="password">
                                            </div><br>
                                            Correo electrónico :
                                            <div class="input-group col-md-12">
                                                <input class="form-control" name="email" type="email">
                                            </div><br>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" name="boton_guardar">Guardar</button>
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
                if(origen == 'edit'){
                    $(modal_delete).modal('show');
                }
            }
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
                $(".boton_guardar").click(function(){
                    var firstname = $(".firstname").val();
                        lastname = $(".lastname").val();
                        user = $(".user").val();
                        password = $(".password").val();
                        confirm_password = $(".confirm_password").val();
                        email = $(".email").val();
                    if (firstname == "") {
                        $(".firstname").focus();
                        return false;
                    }else if(paternal == ""){
                        $(".paternal").focus();
                        return false;
                    }else if(maternal == ""){
                        $(".maternal").focus();
                        return false;
                    }else if(user_code == ""){
                        $(".user_code").focus();
                        return false;
                    }else if (área == "") {
                        $(".área").focus();
                        return false;
                    }else if (user == "") {
                        $(".user").focus();
                        return false;
                    }else if (password == "") {
                        $(".password").focus();
                        return false;
                    }else if (confirm_password=!password) {
                        $(".confirm_password").focus();
                        return false;
                    }else if (email == "") {
                        $(".email").focus();
                        return false;
                    }else {
                        $('ajaxgif').removeClass('hide');
                        var datos = 'firstname='+ firstname + '&paternal=' + paternal + '&maternal=' + maternal +  '&área=' + área+ '&user_code=' + user_code + '&user=' + user + '&password=' + password + '&confirm_password=' + confirm_password + '&email=' + email;
                        $.ajax({
                            type: "GET",
                            url: "/createUser/",
                            data: datos,
                            success: function(){
                                $('.ajaxgif').hide();
                                $('.msg').alert('Usuario agregado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);
                            },
                            error: function(){
                                $('.ajaxgif').hide();
                                $('.msg').alert('Error al agregar usuario!').addClass('msg_error').animate({ 'right' : '130px' }, 300);
                            }
                        });
                        return false;
                    }
                });
        </script>
    </body>
</html>
