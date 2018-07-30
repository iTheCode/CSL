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
                                    <a href="#" id="button-active-chat" class="right-bar-toggle waves-effect"><i class="md md-chat"></i></a>
                                </li>
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
                                    <li class="active">Herramientas Electrónicas</li>
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
                                                    <div class="btn-group pull-right">
                                                        <button type="button" class="btn btn-success dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu btn-success btn-custom" role="menu">
                                                            <li><a href="#" class="tool" data-form="generate">Estado Electrónico</a></li>
                                                            <li><a href="#" class="tool" data-form="mail">Correo Electrónico</a></li>
                                                            <li><a href="#" class="tool" data-form="mass_mail">Correos Masivos</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group-sm">
                                                    <h4>Verificar Estado</h4>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr>
                                                <form id="generate">
                                                <div id="consulta">
                                                    Serie
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="serie" class="form-control" placeholder="BB01">
                                                        <span class="input-group-addon"><i class="d md-bookmark-outline"></i></span>
                                                    </div><br><br>
                                                    Documento
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="document" class="form-control" placeholder="1">
                                                        <span class="input-group-addon"><i class="mmd md-class"></i></span>
                                                    </div><br><br>
                                                    Tipo de Documento
                                                    <div class="input-group col-md-12">
                                                        <select name="pay_document_type_id" class="form-control">
                                                            <option value="">Seleccione un Tipo de Documento</option>
                                                            <option value="01">Factura Electrónica</option>
                                                            <option value="03">Boleta Electrónica</option>
                                                            <option value="07">Nota de Crédito Electrónica</option>
                                                            <option value="08">Nota de Débito Electrónica</option>
                                                        </select>
                                                    </div><br><br>

                                                </div>
                                                <div id="response" class="input-group col-md-12">
                                                </div><br><br><br><br>
                                                <div id="buttons" class="pull-right"><br>
                                                    <button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5" onclick="verificar()">Verificar</button>
                                                </div>
                                                </form>
                                                <form id="mail" style="display:none;">
                                                <div id="mail">
                                                    Documento a Enviar
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="document" class="form-control" placeholder="1">
                                                        <span class="input-group-addon"><i class="mmd md-class"></i></span>
                                                    </div><br><br>

                                                </div>
                                                    <div id="response_mail" class="input-group col-md-12" style="max-height: 200px;">
                                                    </div><br><br><br><br>
                                                    <div id="buttons_mail" class="pull-right"><br>
                                                        <button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5" onclick="enviar_mail()">Enviar</button>
                                                    </div>
                                                </form>
                                                <form id="mass_mail" style="display:none;">
                                                <div id="mass_mail">
                                                    Documento Inicio
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="document_init" class="form-control" placeholder="1">
                                                        <span class="input-group-addon"><i class="mmd md-class"></i></span>
                                                    </div><br><br>
                                                    Documento Fin
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="document_end" class="form-control" placeholder="500">
                                                        <span class="input-group-addon"><i class="mmd md-class"></i></span>
                                                    </div><br><br>


                                                </div>
                                                    
                                                    <div id="response_mass" class="input-group col-md-12" style="max-height: 200px;">
                                                    </div><br><br><br><br>
                                                    <div id="buttons_mass" class="pull-right"><br>
                                                        <button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5" onclick="enviar_mass()">Enviar</button>
                                                    </div>
                                                </form>
                                                


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

            $(".tool").click(function(){
                var form = $(this).data('form');
                $("#generate").slideUp();
                $("#mail").slideUp();
                $("#mass_mail").slideUp();

                $("#"+form+"").slideDown();
            });
            function enviar_mail(){

                $("div#mail").hide();
                var document_send = $("input[name='document']").val().toString();
                            $.ajax(
                                          {
                                              url: "{{ url('/send_email/') }}/"+document_send,
                                              method: "GET",
                                               success: function(result)
                                              {
                                                $('#response_mail').append(result);
                                              }
                                            });
                return false;
            }
            function enviar_mass(){
                $("div#mass_mail").hide();
                var init = $("input[name='document_init']").val().toString();
                var end = $("input[name='document_end']").val().toString();
                sleep(1000);
                while(init <= end){
                            $.ajax(
                                          {
                                              url: "{{ url('/send_email/') }}/"+init,
                                              method: "GET",
                                               success: function(result)
                                              {
                                                $('#response_mass').append(result);
                                              }
                                            });
                            sleep(2000);
                            init++;
                }
                return false;
            }

            function sleep(milliseconds) {
              var start = new Date().getTime();
              for (var i = 0; i < 1e7; i++) {
                if ((new Date().getTime() - start) > milliseconds){
                  break;
                }
              }
            }
            function reset_form(){
                $("#generate")[0].reset();
                $("#consulta").slideDown();
                $("#response").html('');
                $("#buttons").html('<button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5" onclick="verificar()">Verificar</button>');
            }

            function forzar(){
                var data = $("select[name='pay_document_type_id']").val()+"/"+$("input[name='serie']").val()+"/"+$("input[name='document']").val();
                $.ajax(
                {
                    url: "{{ url('/force_send/') }}/"+data,
                    method: "GET",
                    beforeSend: function(){
                        $("#response").html('Cargando...');
                    },
                    success: function(result)
                    {
                        $("#response").html(result);
                        $("#buttons").html('<button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5" onclick="reset_form()">Consultar Otro Documento</button>')

                    }
                });
            }
            function verificar(){
                var data = $("select[name='pay_document_type_id']").val()+"-"+$("input[name='serie']").val()+"-"+$("input[name='document']").val();
                $.ajax(
                {
                    url: "http://s1.clinicaluren.com.pe:8800/get_error.php?q="+data, 
                    method: "GET",
                    beforeSend: function(){
                        $("#verificar").hide();
                        $("#consulta").slideUp();
                        $("#response").html('Cargando...');
                    },
                    success: function(response, status, xhr) {
                        $("#response").html(response.split('[').join('<br><br>['));
                        console.log(response.indexOf('[CODIGO] 0001'));
                        if(response.indexOf('[CODIGO] 0001') != -1){
                            $("#buttons").html('<button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5" onclick="reset_form()">Consultar Otro Documento</button>')
                        }else{
                            $("#buttons").html('<button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5" onclick="forzar()">Forzar Envio</button>   <button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5" onclick="reset_form()">Consultar Otro Documento</button>')

                        }
                    }
                });
                return false;

            }
        </script>

    
    </body>
</html>



