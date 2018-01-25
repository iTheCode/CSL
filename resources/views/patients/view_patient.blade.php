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

<style>  .title {
    display: block;
    width: 120px;
    float: left;
    color: #333;
    font-size: 12px;
    font-weight: 700;
    line-height: 20px;
    text-transform: uppercase;
}</style>
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

                                        <div id="edit-patient" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Datos de Paciente</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div id="patient_data">
                                                            <div class="row"> 
                                                                <div class="col-md-4"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-1" class="control-label">Nombre</label> 
                                                                        <input type="text" class="form-control" name="name" value="{{ $patient->name }}"> 
                                                                    </div> 
                                                                </div> 
                                                                <div class="col-md-4"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-2" class="control-label">Paterno</label> 
                                                                        <input type="text" class="form-control" name="paterno" value="{{ $patient->paternal }}"> 
                                                                    </div> 
                                                                </div> 
                                                                <div class="col-md-4"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-2" class="control-label">Materno</label> 
                                                                        <input type="text" class="form-control" name="materno" value="{{ $patient->maternal }}"> 
                                                                    </div> 
                                                                </div> 
                                                            </div> 
                                                            <div class="row"> 
                                                                <div class="col-md-12"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-3" class="control-label">Dirección</label> 
                                                                        <input type="text" class="form-control" name="direccion" value="{{ $patient->direction }}"> 
                                                                    </div> 
                                                                </div>  
                                                            </div> 
                                                            <div class="row"> 
                                                                <div class="col-md-6"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-4" class="control-label">DNI</label> 
                                                                        <input type="text" class="form-control" name="document_identity_code" value="{{ $patient->document_identity_code }}"> 
                                                                    </div> 
                                                                </div> 
                                                                <div class="col-md-6"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-5" class="control-label">Fecha de Nacimiento</label> 
                                                                        <input type="text" class="form-control" name="fecha" value="{{ $patient->birthday }}"> 
                                                                    </div> 
                                                                </div> 
                                                            </div>
                                                            <div class="row"> 
                                                                <div class="col-md-6"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-3" class="control-label">Sexo</label> 
                                                                        <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                    </div> 
                                                                </div>
                                                                <div class="col-md-6"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-6" class="control-label">Teléfono</label> 
                                                                        <input type="text" class="form-control" name="telefono" value="{{ $patient->phone }}"> 
                                                                    </div> 
                                                                </div> 
                                                            </div>
                                                            @if(isset($patient->insureds))
                                                            <hr>
                                                                <div class="row"> 
                                                                    <div class="col-md-6"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Compañía</label> 
                                                                            <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                        </div> 
                                                                    </div>
                                                                    <div class="col-md-6"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-6" class="control-label">Tipo de Afiliación</label> 
                                                                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                        </div> 
                                                                    </div> 
                                                                </div> 
                                                                <div class="row"> 
                                                                    <div class="col-md-6"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Código de Asegurado</label> 
                                                                            <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                        </div> 
                                                                    </div>
                                                                    <div class="col-md-6"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-6" class="control-label">Relación al Titular</label> 
                                                                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                        </div> 
                                                                    </div> 
                                                                </div> 
                                                                <div class="row"> 
                                                                    <div class="col-md-12"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Aseguradora</label> 
                                                                            <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                        </div> 
                                                                    </div>
                                                                </div> 
                                                                <div class="row"> 
                                                                    <div class="col-md-4"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-6" class="control-label">Nombre del Titular</label> 
                                                                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                        </div> 
                                                                    </div> 
                                                                    <div class="col-md-4"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-3" class="control-label">Ap. Paterno del Titular</label> 
                                                                            <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                        </div> 
                                                                    </div>
                                                                    <div class="col-md-4"> 
                                                                        <div class="form-group"> 
                                                                            <label for="field-6" class="control-label">Ap. Materno del Titular</label> 
                                                                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                        </div> 
                                                                    </div> 
                                                                </div> 
                                                            @else
                                                                <button id="convert_insured" type="button" class="pull-right btn btn-info waves-effect waves-light">Asegurar</button> <br><br><br>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div id="insured_convert" style="display: none;">
                                                    <div class="text-center"><a href="#" id="create_company">¿No se encuentra la compañía? Regístrala.</a></div><br><br>
                                                        <div class="row"> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Compañía</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                </div> 
                                                            </div>
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-6" class="control-label">Tipo de Afiliación</label> 
                                                                    <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Código de Asegurado</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                </div> 
                                                            </div>
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-6" class="control-label">Relación al Titular</label> 
                                                                    <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Aseguradora</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                </div> 
                                                            </div>
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-4"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-6" class="control-label">Nombre del Titular</label> 
                                                                    <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-4"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Ap. Paterno del Titular</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                </div> 
                                                            </div>
                                                            <div class="col-md-4"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-6" class="control-label">Ap. Materno del Titular</label> 
                                                                    <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Paciente</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Timeline</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <div class="panel panel-color panel-success" style="width:fit-content; margin: 0 auto;">
                                    <div class="panel-body"> 
                                       <div class="" style="margin:0 auto;">
                                        <!--<img class="" src="http://www.freeiconspng.com/uploads/person-icon-person-icon-clipart-image-from-our-icon-clipart-category--9.png" width="31%" height="100%">-->
                                        <div class="panel" style="float:right;height:270px;width:500px">
                                            <div class="panel-body">
                                                <div class="media-main">
                                                    <div class="pull-right btn-group-sm">
                                                        <a href="#" class="btn btn-success waves-effect waves-light tooltips" data-toggle="modal" data-target="#edit-patient">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h4>{{ $patient->name or ''}} {{ $patient->paternal or '' }} {{ $patient->maternal or '' }}</h4>
                                                        <p class="text-muted">{{ $patient->insureds->insurance->name or 'Particular' }}</p>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr>
                                                <ul class="list-inline">
                                                                                <li class="clearfix">
                                                                                            <strong class="title">DNI</strong>
                                                                                            <span class="text-muted">{{ $patient->document_identity_code}}</span>
                                                                                    </li> <br>
                                                                            <li class="clearfix">
                                                                                            <strong class="title">Edad</strong>
                                                                                            <span class="text-muted">{{ Helpers::get_age($patient->birthday) }} ({{ $patient->birthday }})</span>
                                                                                    </li> <br>      
                                                                                <li class="clearfix">
                                                                                            <strong class="title">Dirección</strong>
                                                                                            <span class="text-muted">{{ $patient->direction}}</span>
                                                                                    </li>    <br> 
                                                                                <li class="clearfix">
                                                                                            <strong class="title">Sexo</strong>
                                                                                            <span class="text-muted">{{ $patient->sex or 'Corregir Sexo'}}</span>
                                                                                    </li>      <br> 
                                                                                <li class="clearfix">
                                                                                            <strong class="title">Teléfono</strong>
                                                                                            <span class="text-muted">{{ $patient->phone}}</span>
                                                                                    </li>   <br>    
                                                                    </ul>
                                            </div> <!-- panel-body -->
                                        </div> <!-- panel -->
                                    </div>
                                    </div> 
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title text-center">Atenciones</h3> 
                                    </div> 
                                </div>
                                <section id="cd-timeline" class="cd-container">
                                    @foreach ($patient->authorizations as $auth)
                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img cd-success">
                                            <i class="fa fa-stethoscope"></i>
                                        </div> <!-- cd-timeline-img -->
                                        <div class="cd-timeline-content">
                                            <h3><a href="{{ url('/atencion/'.$auth->id) }}">{{ $auth->code }}</a></h3>
                                            <hr>
                                                <ul class="list-inline">
                                                                            <li class="clearfix">
                                                                                            <strong class="title">Diagnostico</strong>
                                                                                            <span class="text-muted">{{ $auth->first_diagnostic or 'Indefinido' }}</span>
                                                                                    </li>       <br>
                                                                                <li class="clearfix">
                                                                                            <strong class="title">Cobertura</strong>
                                                                                            @if(isset($auth->coverage))
                                                                                            <span class="text-muted">{{ $auth->coverage->sub_coverage_type->name or 'Indefinido'}}</span>
                                                                                            @endif
                                                                                    </li> <br>      
                                                                                <li class="clearfix">
                                                                                            <strong class="title">Fijo</strong>
                                                                                            <span class="text-muted">{{ $auth->coverage->cop_fijo or 'Indefinido' }}</span>
                                                                                    </li>    <br>   
                                                                                <li class="clearfix">
                                                                                            <strong class="title">Variable</strong>
                                                                                            <span class="text-muted">{{ $auth->coverage->cop_var or 'Indefinido' }}%</span>
                                                                                    </li>       <br>
                                                                                <li class="clearfix">
                                                                                            <strong class="title">Doctor</strong>
                                                                                            <span class="text-muted">{{ $auth->doctor->complet_name or ''}}</span>
                                                                                    </li> 
                                                                    </ul>
                                            <span class="cd-date">{{ $auth->created_at or $auth->date }}</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    @endforeach
                                </section> <!-- cd-timeline -->
                            </div>
                        </div><!-- Row -->
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
        
        
        
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $("#convert_insured").click(function(event) {
                    $(this).fadeOut();
                    $(".modal-title").text("Convertir a Asegurado");
                    $("#patient_data").slideUp().parent().next().slideDown();
                });
            var $timeline_block = $('.cd-timeline-block');

                //hide timeline blocks which are outside the viewport
                $timeline_block.each(function(){
                    if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
                        $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
                    }
                });

                //on scolling, show/animate timeline blocks when enter the viewport
                $(window).on('scroll', function(){
                    $timeline_block.each(function(){
                        if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                            $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                        }
                    });
                });
            });
        </script>

    
    </body>
</html>