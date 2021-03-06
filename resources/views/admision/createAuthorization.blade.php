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
        <link href="/assets/css/components.css" rel="stylesheet" type="text/css" load="force">
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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600');

        .container-auth{
          width: 700px;
          height: 330px;
          background: #fff;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .img-container{
          width: 35%;
          height: 100%;
          float: left;
          position: relative;
        }

        .img-container img{
          width: 100%;
          height: 60%;
          padding-top:45%;
          margin-left:35px;
          border-top-left-radius: 5px;
          border-bottom-left-radius: 5px;
        }

        .content-auth{
          width: 60%;
          height: 100%;
          float: left;
          padding: 30px;
          margin-left:35px;
          box-sizing: border-box;
        }

        .head{
          padding-bottom: 30px;
        }

        .head p{
          font-size: 20px;
          color: #444444;
          font-weight: 600;
        }

        .head span{
          color: #aaabaf;
          font-size: 14px;
        }

        .data{
          width: 110%;
          overflow: hidden;
        }

        .inner-data{
          width: 32%;
          padding-top:30px;
          float: left;
          text-align: left;
          color: #aaabaf;
        }

        .inner-data p{
          font-size: 14px;
          padding-bottom: 5px;
        }

        .inner-data span{
          font-size: 12px;
          font-weight: 400;
        }

        .img-container:before{
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          border-left: 30px solid #1DA1F2;
          border-right: 30px solid transparent;
          border-top: 30px solid #1DA1F2;
          border-bottom: 30px solid transparent;
          cursor: pointer;
          border-top-left-radius: 5px;
        }

        .img-container:after{
          font-family: fontawesome;
          content:"\f0f9";
          position: absolute;
          top: 10px;
          left: 8px;
          color: #fff;
          font-size: 18px;
        }


        .floating-icon{
          position: absolute;
          width: 50px;
          height: 50px;
          top: 38%;
          right: -5%;
          background: #1DA1F2;
          border-radius: 50%;
          cursor: pointer;
        }

        .floating-icon .fa{
          position: absolute;
          left: 18px;
          top: 15px;
          color: #fff;
          font-size: 20px;
          transition: all 1s ease;
        }

        .floating-icon.active .fa{
            transform: rotate(45deg); 
            transition: all 1s ease;
        }

        .btn-modified{
          position: absolute;
          top: 10px;
          right: 10px;
          text-transform: uppercase;
          font-size: 12px;
          background: #1DA1F2;
          padding: 6px 15px;
          color: #fff;
          font-weight: 600;
          opacity: 0;
          transition: all 1s ease;
          cursor: pointer;
        }
        .btn-modified:hover{
            color:#fff;
        }
        .btn-modified.active{
          opacity: 1;
          color:#fff;
        }
    </style>

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

                                        <div id="custom-width-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" >
                                            <div class="modal-dialog modal-full">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Documento de Pago</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                    <!-- Start Document Body -->


                                                    <!-- End Document Body -->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Finalizar</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Nueva Atención</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form id="basic-form" action="#">
                                            <div>
                                                <h3>Busqueda</h3>
                                                <section id="1">

                                                    <div class="form-group clearfix">


                                                        <label class="col-lg-3 control-label" for="metodo">Tipo de Busqueda</label>
                                                        <div class="col-lg-9">
                                                            <select name="metodo" id="metodo" class="form-control">
                                                                <option>Seleccione un Tipo de Búsqueda</option>
                                                                <option value="2" selected>Automática</option>
                                                                <option value="3">Manual</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label" for="metodo">Tipo de Atención</label>
                                                            <div class="col-lg-9">
                                                                    {{ Form::select('authorization_type_id', [null=>'Seleccione un tipo'] + $authorization_types, null, ['class' => 'form-control']) }}
                                                            </div>
                                                        </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label" for="userName">Nombres de Paciente</label>
                                                        <div class="col-lg-9">
                                                            <input class="form-control required" id="userName" name="userName" type="text" placeholder="Ingrese Nombres del Paciente o Número de DNI">
                                                            </div>
                                                    </div>
                                                </section>
                                                <h3>Paciente</h3>
                                                <section>

                                                    <div id="results" class="form-group clearfix">
                                                        <label class="col-lg-12 control-label">Resultados :</label>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Historia Clínica</th>
                                                                                    <th>DNI</th>
                                                                                    <th>Paciente</th>
                                                                                    <th>Aseguradora</th>
                                                                                    <th>Edad</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="patients">
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>1</td>
                                                                                    <td>99999999</td>
                                                                                    <td>Sin Resultados</td>
                                                                                    <td>Sin Resultados</td>
                                                                                    <td>Sin Resultados</td>
                                                                                </tr>          
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div id="manual" style="display:none;">
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label" for="name"> Nombres Completos *</label>
                                                        
                                                            <div class="col-lg-3">
                                                                <input id="names" name="names" type="text" class="required form-control" placeholder="Nombres Completos">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <input id="ap_paterno" name="ap_paterno" type="text" class="required form-control" placeholder="Apellido Paterno">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <input id="ap_materno" name="ap_materno" type="text" class="required form-control" placeholder="Apellido Materno">
                                                            </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label" for="surname"> DNI *</label>
                                                        <div class="col-lg-10">
                                                            <input id="surname" name="surname" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label" for="email">Teléfono *</label>
                                                        <div class="col-lg-4">
                                                            <input id="email" name="email" type="text" class="required email form-control">
                                                        </div>
                                                        <label class="col-lg-2 control-label" for="address">Sexo*</label>
                                                        <div class="col-lg-4">
                                                            <select class="form-control" id="boolean_sex" name="boolean_sex"><option value="">Seleccione el sexo</option><option value="true">Masculino</option>
                                                            <option value="false">Femenino</option></select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label" for="email">Fecha de Nacimiento *</label>
                                                        <div class="col-lg-101">
                                                            <input id="email" name="email" type="text" class="required email form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                </section>
                                                <h3>Atención</h3>
                                                <section>
                                                <form method="post" id="authorization">
                                                    <div class="form-group clearfix">
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-2 control-label" for="name"> Nombres Completos *</label>
                                                            <div class="col-lg-10">
                                                                <input id="name" name="name" type="text" class="required form-control">
                                                                <input id="id_hidden" name="id_hidden" type="text" class="required form-control" style="display: none;" >
                                                                <input id="authorization_type_id" name="authorization_type_id" type="text" class="required form-control" style="display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-2 control-label" for="name"> Médico en Atención *</label>

                                                            <div class="col-lg-10">
                                                                {{ Form::select('doctor_id', [null=>'Seleccione un doctor'] + $doctors, null, ['class' => 'select2 form-control']) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-2 control-label" for="name"> Tipo de Cobertura</label><br>

                                                            <div class="col-lg-5">
                                                                {{ Form::select('sub_coverage_type_id', [null=>'Seleccione la cobertura'] + $sub_coverage_types, null, ['class' => 'select2 form-control']) }}
                                                            </div>
                                                            <label class="col-lg-2 control-label" for="name"> Tipo de Servicio</label><br>
                                                            <div class="col-lg-5">
                                                                    {{ Form::select('service_id', [null=>'Seleccione un servicio'] + $services, null, ['class' => 'select2 form-control']) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-2 control-label" for="name"> Copago Fijo</label><br>

                                                            <div class="col-lg-5">
                                                                <input id="cop_fijo" name="cop_fijo" type="text" class="required form-control">
                                                            </div>
                                                            <label class="col-lg-2 control-label" for="name"> Copago Variable</label><br>
                                                            <div class="col-lg-5">
                                                                <div class="input-group bootstrap-touchspin"><input id="cop_var" name="cop_var" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix">%</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </section>  
                                                <h3>Pago</h3>
                                                <section>
                                                    <div class="form-group clearfix" style="margin-left: 20px;">

                                                                    <div id="voucher" class="pull-left m-t-30">
                                                                        <div class="wrapper">
                                                                          <div class="container-auth">
                                                                            <div class="img-container">
                                                                              <img src="http://system.clinicaluren.com.pe/assets/images/logo.png" alt="">
                                                                            </div>
                                                                            
                                                                            <div class="content-auth">
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="payments_options" class="pull-left text-left col-md-4"><br>
                                                                                <p><strong>Tipo de Pago:</strong> 
                                                                                <select class="form-control col-md-4" id="pay_type" name="pay_type"><option value="">Seleccione el tipo de Pago</option><option value="1" selected>Efectivo</option></select></p>
                                                                                <p><strong>Tipo de Documento: </strong><select class="form-control" id="pay_edocument_type" name="pay_edocument_type"><option value="">Seleccione el tipo de Documento</option><option value="1" selected>Boleta del Paciente</option><option value="2">Factura con RUC</option><option value="3">Boleta con DNI</option><option value="4">Boleta sin DNI</option></select></p><p style="display: none;" class="input-group m-t-10"><strong>RUC :</strong><input id="ruc" name="ruc" type="text" class="form-control"><span class="input-group-btn" style="top: 10px;right: -1px;"><button type="button" class="btn waves-effect waves-light btn-primary return-select"><i class="md md-keyboard-return"></i></button></span></p><p style="display: none;" class="input-group m-t-10"><strong>DNI :</strong><input id="dni" name="dni" type="text" class="form-control"> <span class="input-group-btn" style="top: 10px;right: -1px;"><button type="button" class="btn waves-effect waves-light btn-primary return-select"><i class="md md-keyboard-return"></i></button></span></p><p><strong>Mail :</strong><input id="mail" name="mail" type="text" class="form-control"> </p>
                                                                                <p><strong>Vista de Impresión: </strong> <select class="form-control" id="pay_edocument_view" name="pay_edocument_view><option value="">Seleccione la visa de Impresión</option><option value="1" selected>Ticketera</option><option value="2">Media Hoja</option></select></p>
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


        <script src="/assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <!--wizard initialization-->
        <script src="/assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

        <!-- Modal-Effect -->
        <script src="/assets/plugins/modal-effect/js/classie.js"></script>
        <script src="/assets/plugins/modal-effect/js/modalEffects.js"></script>
        <script src="/assets/plugins/jquery-print/js/jQuery.print.js"></script>
        <script>
            $(document).ready(function(){
                var i = 1;
                $("a[href='#next']").text('Buscar');
                $("a[href='#previous']").hide();
                $('select.select2').select2();
                $('select[name="authorization_type_id"]').change(function(){
                    var val = $(this).val();
                    if(val == '7'){
                        $("#cop_var").val('0').attr("disabled", true);
                    }else{
                        $("#cop_var").val('').attr("disabled", false);
                    }
                });
                $('#metodo').change(function(){
                    var val = $(this).val();
                    if(val == '3'){
                        $("#results").fadeOut();
                        $("#manual").fadeIn();
                        $("#userName").fadeOut();
                        $("label[for='userName']").fadeOut();
                    }else{
                        $("label[for='userName']").fadeIn();
                        $("#userName").fadeIn();
                        $("#results").fadeIn();
                        $("#manual").fadeOut();
                        $("#cop_var").val('').attr("disabled", false);
                    }
                });
                $("select[name='authorization_type_id']").change(function(){
                    $("input[name='authorization_type_id']").val($(this).val());
                });
                $("a[href='#previous']").click(function(){
                    check_buttons(i);
                });
                $("a[href='#finish']").click(function(){
                    
                });
                $("#pay_edocument_type").change(function(){
                    var selected = $(this).val();
                    if(selected == 2){
                        $(this).parent().fadeOut(1000).next().fadeIn(2000).focus();
                    }else if(selected == 3){
                        $(this).parent().fadeOut(1000).next().next().fadeIn(2000).focus();
                    }
                });

                $(".return-select").click(function(){
                    $(this).parent().parent().fadeOut(1000);
                    $("#pay_edocument_type").parent().fadeIn(2000);
                });
                $("a[href='#next']").click(function(){

                    $("a[href='#previous']").show();
                    var value = $("#metodo").val();
                    if(i == "2" && value == "3" ){
                         $("a[href='#next']").text('Crear Paciente');
                    }

                    if ($(this).hasClass('create_paciente')){
                        var question = confirm("Estás seguro de crear al paciente?");
                        if(question){

                            $("a[href='#previous']").remove();

                            var names = $("#names").val();
                            var ap_paterno = $("#ap_paterno").val();
                            var ap_materno = $("#ap_materno").val();
                            var dni = $("#surname").val();
                            var email = $("#email").val();
                            var boolean = $("#boolean_sex").val();
                            var date = $("#date").val();
                            var data = "names="+names+"&ap_paterno="+ap_paterno+"&ap_materno="+ap_materno+"&dni="+dni+"&email="+email+"&sex="+boolean+"&date="+date;

                            if(names == null || names == "" ||ap_paterno == null || ap_paterno == "" || ap_materno == null || ap_materno == "" || dni == null || dni == "" || email == null || email == "" || boolean == null || boolean == "" || date == null || date == "" ){ alert("Usted no ha ingresado los datos correctamente, debe volver a crear el paciente."); location.reload();}

                            $.ajax(
                              {
                                  url: "{{ url('/createPatient/') }}", 
                                  method: "GET",
                                  data: data,
                                   success: function(result)
                                  {
                                    var name = result.name+" "+result.paternal+" "+result.maternal;
                                    console.log(result);
                                    if (result.insureds == null) {
                                        $("#cop_var").val('0').attr("disabled", true);
                                    }


                                    $("#name").val(name);
                                    $("#id_hidden").val(result.id);

                                    $(this).addClass('bg-primary');

                                                                            
                                  }
                                });
                        }else{
                            location.reload();
                        }
                    }


                    if ($(this).hasClass('create_atencion')){
                        var question = confirm("Estás seguro de generar la atención?");
                        if(question){
                            $("a[href='#previous']").remove();
                            var id_hidden = $("#id_hidden").val();
                            var authorization_type_id = $("select[name='authorization_type_id']").val();
                            var doctor_id = $("select[name='doctor_id']").val();
                            var cop_var = $("#cop_var").val();
                            var cop_fijo = $("#cop_fijo").val();
                            var sub_coverage_type_id = $("select[name='sub_coverage_type_id']").val();
                            var data = "id_hidden="+id_hidden+"&authorization_type_id="+authorization_type_id+"&doctor_id="+doctor_id+"&cop_var="+cop_var+"&cop_fijo="+cop_fijo+"&sub_coverage_type_id="+sub_coverage_type_id;
                            if(doctor_id == null || doctor_id == "" || cop_fijo == "" || cop_fijo == null || cop_var == "" || cop_var == null){ alert("Usted no ha ingresado los datos correctamente, debe volver a crear la atención."); location.reload();}
                            $.ajax(
                              {
                                  url: "{{ url('/createAtencion/') }}", 
                                  method: "GET",
                                  data: data,
                                   success: function(result)
                                  {
                                    if (result.insureds == null) {
                                        result.insureds = new Object();
                                        result.insureds.hold_name = result.patient.name;
                                        result.insureds.hold_maternal = result.patient.maternal;
                                        result.insureds.hold_paternal = result.patient.paternal;
                                        result.insureds.insurance = new Object();
                                        result.insureds.insurance.name = 'Particular';
                                    }
                                    $('.content-auth').html('<div class="head"><p>'+result.patient.name+' '+result.patient.paternal+' '+result.patient.maternal+'</p><span>'+result.insureds.insurance.name+'</span></div><div class="data"><div class="inner-data"><p>Atención</p><span>#'+result.id+'</span></div><div class="inner-data"><p>Autorización</p><span>#'+result.code+'</span></div><div class="inner-data"><p>Código Interno</p><span>#'+result.intern_code+'</span></div><div class="inner-data"><p>Historia Clínica</p><span>'+result.patient.clinic_history_code+'</span></div><div class="inner-data"><p>Pago Fijo</p><span>S/.'+parseFloat(result.coverage.cop_fijo).toFixed(2)+'</span></div><div class="inner-data"><p>Cubierto al</p><span>'+result.coverage.cop_var+'%</span></div></div>');

                                    $("#print-button").click(function(){
                                        if(window.confirm('¿Está seguro de imprimir el documento?')){
                                          var val = $("select[name='service_id']").val();
                                          var items = {};
                                          var copago_fijo = result.coverage.cop_fijo;
                                          $.ajax({
                                                      url: "{{ url('/ServiceFindAPI/') }}/"+val, 
                                                      method: "GET",
                                                       success: function(item_result)
                                                      {
                                                        items[0] =  {'service_id': $("select[name='service_id']").val(), 'exented' : '1', 'quantity': '1', 'pu' : parseFloat(copago_fijo/1.18).toFixed(2), 'imp': parseFloat(copago_fijo/1.18).toFixed(2), 'clinic_area_id' : item_result.clinic_area_id, 'discountp': '0'};
                                                        var values = { 'authorization_id' : result.id, 'discountp' : result.coverage.cop_var, 'discountt' : '0', 'importe' : parseFloat(result.coverage.cop_fijo/1.18).toFixed(2), 'opgravada' : parseFloat(result.coverage.cop_fijo/1.18).toFixed(2), 'opnogravada' : '0', 'opexonerada' : '0', 'subtotal' : parseFloat(result.coverage.cop_fijo/1.18).toFixed(2) , 'igv' : parseFloat(parseFloat(result.coverage.cop_fijo/1.18).toFixed(2)*0.18).toFixed(2), 'total': parseFloat(result.coverage.cop_fijo).toFixed(2), 'is_coverage' : 1, 'payment_type' : $("#pay_type").val(), 'view_print': $("#pay_edocument_view").val(),'payment_document_type' : $("#pay_edocument_type").val(), 'DNI' : $("#dni").val(), 'RUC': $("#ruc").val(), 'Mail' : $("#mail").val()};

                                                          values['items'] = items;

                                                          var data = JSON.stringify(values);
                                                          $.ajax({
                                                              url:"{{ url('/pay_edocument/create/') }}/"+data,
                                                              method: "GET",
                                                              async:false,
                                                              success: function(result){
                                                                  $.address.value("/caja/documentos");
                                                                  data = $.parseJSON(result);
                                                                  url_path = "{{ url('/pay_edocument/view/') }}/"+data.type+"/"+data.input.id+"/print.pdf"
                                                                  window.open(url_path,"_blank");
                                                              }
                                                          });


                                                      }
                                                    });
                              
                                        }
                                    });
                                                                            
                                  }
                                });
                        }else{
                            location.reload();
                        }
                    }
                    if( i == "3"){var response = true; $(this).text('Crear Atención').addClass('create_atencion');if($("#name").val() == "" || $("#name").val() == null){response = false;} if(value != "3"){$('table tbody tr').each(function(){if ($(this).hasClass('bg-primary')){response = response || true;}else{ response = response || false; }});} if(!response){alert("Seleccione un paciente"); location.reload(); }}else{$(this).text('Next').removeClass('create_atencion');}
                    if (i == "4"){ 
                        $("a[href='#finish']").parent().html('<hr><a id="print-button" href="#" class="btn-success waves-effect waves-light m-b-5"><i class="fa fa-print"></i> <span>Imprimir Voucher</span></a>'); 
                    }
                    var val = $('#userName').val();
                    var internal = "/getPatientAPI/";
                    var reniec = "/getNewPatientAPI/";
                    var method = $("#metodo").val();

                        if(!isNaN(val) && val.toString().length == 8){var data = reniec+val;}else{var data = internal+val;}
                    if( i == "2"){
                        if(val != "" || value == '3'  ){
                            if($("select[name='authorization_type_id']").val() == null || $("select[name='authorization_type_id']").val() == ""){alert("Seleccione el tipo de atención brindado."); location.reload();}
                            $.ajax(
                              {
                                  url: data, 
                                   success: function(result)
                                  {
                                    $("#patients").html(result);
                                    $('#patients tr').hover(function() {
                                        $(this).addClass('bg-success');
                                    }, function() {
                                        $(this).removeClass('bg-success');
                                    });
                                    $('#patients tr').click(function() {
                                        var id = "{{ url( "/getPatientJSON/" )}}/"+$(this).attr("id");
                                        $.ajax(
                                              {
                                                  url: id, 
                                                   success: function(result)
                                                  {
                                                    var name = result.name+" "+result.paternal+" "+result.maternal;
                                                    //console.log(result);
                                                    if(result.insureds == null){
                                                        //$("#cop_fijo").val('0').attr("disabled", true);
                                                        $("#cop_var").val('0').attr("disabled", true);
                                                    }
                                                    $("#name").val(name);
                                                    $("#id_hidden").val(result.id);
                                                  }
                                              });
                                        $('table tbody tr').each(function(){
                                            if ($(this).hasClass('bg-primary')){
                                                $(this).removeClass('bg-primary');
                                            }
                                        });
                                        $(this).addClass('bg-primary');
                                    });
                                   }
                                }
                            );
                        }else{
                            alert("Ingrese el DNI o Nombres de Paciente");
                        }
                    }
                    check_buttons(i);
                });
                function check_buttons(i){
                        if (i != "1"){
                            var val = $("#metodo").val();
                            if(i == "2" && val == "3" ){
                                $("a[href='#next']").text('Crear Paciente').addClass('create_paciente');$
                            }
                            if(i == "3"){
                                $("a[href='#next']").text('Crear Atención').addClass('create_atencion');$
                            }else{
                                $("a[href='#next']").text('Next').fadeIn();
                            }
                        }
                        console.log(val);
                        console.log(i);
                }
                function check_create(){
                            if ($("a[href='#next']").hasClass('create_atencion')){
                                    $("a[href='#next']").removeClass('create_atencion').text('Next');
                            }

                }
                $("#steps-uid-0-t-0").click(function(){
                    i = 1;
                    check_create();
                });
                $("#steps-uid-0-t-1").click(function(){
                    i = 2;
                    check_create();
                });
                $("#steps-uid-0-t-2").click(function(){
                    i = 3;
                    check_create();
                });
                $("#steps-uid-0-t-3").click(function(){
                    i = 4;
                    $("#steps-uid-0-t-0").parent().removeClass().addClass('disabled');
                    $("#steps-uid-0-t-1").parent().removeClass().addClass('disabled');
                    $("#steps-uid-0-t-2").parent().removeClass().addClass('disabled');
                });
            });
        </script>
    </body>
</html>