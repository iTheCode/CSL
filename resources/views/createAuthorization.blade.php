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
                                    <div class="panel-body">
                                        <div class="clearfix">
                                             <div class="row" >
                                            <div class="pull-left">
                                                <h4 class="text-left"><img src="/assets/images/logo.png"  width="200" height="50" alt="CSLuren"></h4>
                                            </div><div class="pull-right text-center">
                                                <h4>FACTURA ELECTRONICA <br>
RUC: 20494306043 <br>
F002-50
                                                </h4>
                                            </div>
                                                    <div class="text-center" style="width:200px;float:left;margin-left:5%;">Av. San Martín. N° 536 , Ica Ica <br>Citas: (056) 216166 <br> Email: info@clinicaluren.com.pe<br></div>
                                            
                                             </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="pull-left">
                                                    <address>
                                                    <p><strong>Señor(es): Paciente o RUC</strong> </p>
                                                    <p><strong>Paciente: (Aseguradora)</strong> </p>
                                                    <p><strong>Titular: </strong> </p>
                                                      </address>
                                                </div>
                                                <div class="pull-right">
                                                    <p><strong>Fecha: </strong> </p>
                                                    <p><strong>Autorización: </strong> </p>
                                                    <p><strong>Atención: (Código Interno)</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Item</th>
                                                            <th>Cantidad</th>
                                                            <th>P. U.</th>
                                                            <th>Importe</th>
                                                            <th></th>
                                                        </tr></thead>
                                                        <tbody id="list-content">
                                                        <tr id=" 01.01.04" exented="1" quantity="1.00" pu="46.61" imp="46.61"><td> 01.01.04</td><td>AMBULATORIO PRE 30 DIAS Y POST 30 DIAS DE UNA HOSPITALIZACION - H2 -  </td><td>1.00</td><td>46.61</td><td>46.61</td></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="totales" class="col-md-3 col-md-offset-9">
                                                <!--<p class="text-right"><b>Descuento (%) :</b>0.00</p>-->
                                                <p class="text-right"><b>Op. Gravada:</b> 0.00</p>
                                                <!--<p class="text-right"><b>Op. No Gravada:</b> 0.00</p>
                                                <p class="text-right"><b>Op. Exonerada:</b> 0.00</p>-->
                                                <p class="text-right"><b>Subtotal:</b> 0.00</p>
                                                <p class="text-right"><b>IGV (18%) :</b> 0.00</p>
                                                <p class="pull-left"><b>SON: </b>CINCUENTA Y NUEVE CON 00/100 SOLES</p>
                                                <h3 class="text-right">S./ 0.00</h3>
                                            </div>
                                        </div>
                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
<a id="print-button" href="#" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
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
                                                            <label class="col-lg-2 control-label" for="name"> Tipo de Cobertura *</label>

                                                            <div class="col-lg-10">
                                                                {{ Form::select('sub_coverage_type_id', [null=>'Seleccione la cobertura'] + $sub_coverage_types, null, ['class' => 'select2 form-control']) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-2 control-label" for="name"> Copago Fijo / Copago Variable</label>

                                                            <div class="col-lg-5">
                                                                <input id="cop_fijo" name="cop_fijo" type="text" class="required form-control">
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="input-group bootstrap-touchspin"><input id="cop_var" name="cop_var" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix">%</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </section>  
                                                <h3>Pago</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                                    <div id="voucher" class="pull-left m-t-30">
                                                                            <p><strong>Atención #</strong> </p>
                                                                            <p><strong>Autorización # </strong> </p>
                                                                            <p><strong>Código Interno #68277</strong> </p>
                                                                            <p class="m-t-10"><strong>Paciente: </strong> </p>
                                                                            <p class="m-t-10"><strong>Titular: </strong> </p>
                                                                            <p class="m-t-10"><strong>Cobertura: (Empresa)</strong> </p>
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
                $("#print-button").click(function(){
                    if(window.confirm('Está seguro de imprimir?')){
                        $(".modal-body").print();
                    }
                    //$("#custom-width-modal").delay(700).modal("hide");
                });
                $("select[name='authorization_type_id']").change(function(){
                    $("input[name='authorization_type_id']").val($(this).val());
                });
                $("a[href='#previous']").click(function(){
                    check_buttons(i);
                });
                $("a[href='#finish']").click(function(){
                    
                });
                $("a[href='#next']").click(function(){
                    var value = $("#metodo").val();
                    if(i == "2" && value == '3' ){
                         $("a[href='#next']").text('Crear Paciente');
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
                            if(doctor_id == null || doctor_id == "" || sub_coverage_type_id == "" || sub_coverage_type_id == null|| cop_fijo == "" || cop_fijo == null || cop_var == "" || cop_var == null){ alert("Usted no ha ingresado los datos correctamente, debe volver a crear la atención."); location.reload();}
                            $.ajax(
                              {
                                  url: "{{ url('/createAtencion/') }}", 
                                  method: "GET",
                                  data: data,
                                   success: function(result)
                                  {
                                    console.log(result);
                                    if (result.insureds == null) {
                                        result.insureds = new Object();
                                        result.insureds.hold_name = result.patient.name;
                                        result.insureds.hold_maternal = result.patient.maternal;
                                        result.insureds.hold_paternal = result.patient.paternal;
                                        result.insureds.insurance = new Object();
                                        result.insureds.insurance.name = 'Particular';
                                    }
                                    $('#voucher').html('<p><strong>Atención #'+result.id+'</strong> </p><p><strong>Autorización #'+result.code+'</strong> </p><p><strong>Código Interno #'+result.intern_code+'</strong> </p><p class="m-t-10"><strong>Paciente: '+result.patient.name+' '+result.patient.paternal+' '+result.patient.maternal+'</strong> </p><p class="m-t-10"><strong>Titular: '+result.insureds.hold_name+' '+result.insureds.hold_paternal+' '+result.insureds.hold_maternal+'</strong> </p><p class="m-t-10"><strong>Cobertura: S/.'+parseFloat(result.coverage.cop_fijo).toFixed(2)+' ('+result.coverage.cop_var+'%) ('+result.insureds.insurance.name+')</strong> </p>');
                                                                            
                                  }
                                });
                        }else{
                            location.reload();
                        }
                    }
                    if( i == "3"){var response = true; $(this).text('Crear Atención').addClass('create_atencion');if($("#name").val() == "" || $("#name").val() == null){response =false;}$('table tbody tr').each(function(){if ($(this).hasClass('bg-primary')){response = true;}else{ response = false; }}); if(!response){alert("Seleccione un paciente");}}else{$(this).text('Next').removeClass('create_atencion');}
                    if (i == "4"){ $("a[href='#finish']").parent().html('<a id="print-button" href="#" class="btn btn-inverse waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-print"></i></a>');}
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
                            if(i == "2" && val == '3' ){
                                 $("a[href='#next']").text('Crear Paciente');
                            }
                            if(i == "3"){
                                $("a[href='#next']").text('Crear Atención').addClass('create_atencion');$
                            }else{
                                $("a[href='#next']").text('Next').fadeIn();
                            }
                        }
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