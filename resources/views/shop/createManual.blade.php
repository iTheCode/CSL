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
        <link href="/assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="/assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
        <link href="/assets/plugins/toggles/toggles.css" rel="stylesheet">
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
                                <ol class="breadcrumb pull-right">
                                    <li><a href="{{ url('/') }} ">{{ $system_name }}</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                <div id="modalNewPatient" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
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
                                                                        <input type="text" class="form-control" name="name" value=""> 
                                                                    </div> 
                                                                </div> 
                                                                <div class="col-md-4"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-2" class="control-label">Paterno</label> 
                                                                        <input type="text" class="form-control" name="paterno" value=""> 
                                                                    </div> 
                                                                </div> 
                                                                <div class="col-md-4"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-2" class="control-label">Materno</label> 
                                                                        <input type="text" class="form-control" name="materno" value=""> 
                                                                    </div> 
                                                                </div> 
                                                            </div> 
                                                            <div class="row"> 
                                                                <div class="col-md-12"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-3" class="control-label">Dirección</label> 
                                                                        <input type="text" class="form-control" name="direccion" value=""> 
                                                                    </div> 
                                                                </div>  
                                                            </div> 
                                                            <div class="row"> 
                                                                <div class="col-md-6"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-4" class="control-label">DNI</label> 
                                                                        <input type="text" class="form-control" name="document_identity_code" value=""> 
                                                                        <label><input type="checkbox" id="no_dni_checkbox" name="no_dni_checkbox" value=""> No DNI</label>
                                                                    </div> 
                                                                </div> 
                                                                <div class="col-md-6"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-5" class="control-label">Fecha de Nacimiento</label> 
                                                                        <input type="text" class="form-control" name="fecha" value=""> 
                                                                    </div> 
                                                                </div> 
                                                            </div>
                                                            <div class="row"> 
                                                                <div class="col-md-6"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-3" class="control-label">Sexo</label> 
                                                                        <select class="form-control" name="sex" id="">
                                                                            <option value="1">Masculino</option>
                                                                            <option value="2">Femenino</option>
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                                <div class="col-md-6"> 
                                                                    <div class="form-group"> 
                                                                        <label for="field-6" class="control-label">Teléfono</label> 
                                                                        <input type="text" class="form-control" name="telefono" value=""> 
                                                                    </div> 
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button> 
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Crear Paciente</button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="modalNewService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="panel-title">Agregar Servicio</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="createService" method="get" action="#" novalidate="novalidate">
                                                 <div class="form-group">
                                                    <label for="document_typ_id" class="control-label col-lg-2">Nombre:</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="name" name="name" type="text">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="motivo" class="control-label col-lg-2">Código:</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="code" name="code" type="text" value="99.99.99">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="motivo" class="control-label col-lg-2">Área Contable:</label>
                                                    <div class="col-lg-10">
                                                        <select class="form-control select2" id="service_contable_code" name="service_contable_code" prompt="Área contable">
                                                          <option value="0" selected>Seleccione un Área Contable</option>
                                                          <option value="1">HONORARIOS, PROCEDIMIENTOS MÉDICOS Y Q</option>
                                                          <option value="2">PROCEDIMIENTOS ODONTOLOGICOS</option>
                                                          <option value="3">HOTELERÍA SERVICIO CLINICO Y TOPICO</option>
                                                          <option value="4">EXAMENES AUXILIARES DE LABORATORIO</option>
                                                          <option value="5">DIAGNOSTICOS POR IMAGENES Y OTROS DE AYUDA</option>
                                                          <option value="9">OTROS</option></select>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="motivo" class="control-label col-lg-2">Área Clínica:</label>
                                                    <div class="col-lg-10">
                                                        {{ Form::select('new_clinic_area_id', [null=>'Seleccione una Área Clínica'] + $areas, null, ['class' => 'select2 form-control']) }}
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="motivo" class="control-label col-lg-2">Precio Unitario:</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="unitary" type="text"><label><input type="checkbox" id="igv_checkbox" name="igv_checkbox" value="igv"> Incluye IGV</label>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button id="submitService" type="button" class="btn waves-effect waves-light btn-success">Crear</button>

                                        </div>

                                    </div>
                                  </div>
                                </div>
                                
                            </div>

                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right"><img src="/assets/images/logo.png"  width="250" height="70" alt="CSLuren"></h4>
                                                
                                            </div>
                                            <div class="pull-right col-md-3 input-group m-t-4">
                                                                        <input type="text" id="document_identity_code" name="document_identity_code" class="form-control" placeholder="DNI / RUC">
                                                                        <span class="input-group-btn">
                                                                        <button id="search-cedula" type="button" class="btn waves-effect waves-light btn-primary"><i class="md md-search"></i></button>
                                                                        </span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div id="information-personal" class="pull-left m-t-30">
                                                    <address>
                                                    <p><strong>Documento: </strong> Desconocido </p>
                                                    <p class="m-t-10"><strong>Cliente: </strong> Desconocido </p>
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Fecha: </strong> {{ $date }}</p>
                                                    <p><strong>Tipo: </strong> Venta Particular </p>
                                                </div>
                                                <div id="add-item" class="pull-left m-t-30">
                                                            <div class="col-md-4">
                                                                <label class="col-md-4 control-label" for="name"> Doctor *</label>
                                                                {{ Form::select('doctor_id', [null=>'Seleccione un doctor'] + $doctors, null, ['class' => 'select2 form-control col-md-2']) }}

                                                            </div>
                                                            <div class="col-md-8">
                                                                <label class="col-md-8 control-label" for="name"> Código *</label>
                                                                {{ Form::select('code_id', [null=>'Seleccione un servicio'] + $codes, null, ['class' => 'select2 form-control']) }}
                                                            </div>


                                                            <div class="col-md-6" style="display:none;">
                                                                <label class="col-md-8 control-label" for="name"> Área Clínica *</label>
                                                                {{ Form::select('clinic_area_id', [null=>'Seleccione una Área Clínica'] + $areas, null, ['class' => 'form-control']) }}
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="col-md-2 control-label" for="name"> Exento</label>
                                                                {{ Form::select('service_exented_id', $service_exented, null, ['class' => 'select2 form-control']) }}
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label class="col-md-2 control-label" for="name"> Factor</label>
                                                                @if($client->insureds)
                                                                    <input name="factor" type="text" class="form-control" value="1" disabled>
                                                                @else
                                                                    <input name="factor" type="text" class="form-control" value="1" disabled>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label class="col-md-2 control-label" for="name"> Cantidad</label>
                                                                    <input name="cantidad" type="text" class="form-control" value="1">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label class="col-md-2 control-label" for="name"> Unitario</label>
                                                                    <input name="unitary" type="text" class="form-control" value="">
                                                            </div>
                                                            <div class="col-md-2">
                                                                    <label class="col-md-2 control-label" for="name"> IGV</label>
                                                                    <div class="col-lg-3 control-label" style="padding-top: 29px;">
                                                                        <div id="igv-option" style="display: none;">0</div>
                                                                        <div id="discountp" style="display: none;">0</div>
                                                                        <div id="igv-option-toggle" class="toggle toggle-success"></div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-2" style="display: none;">
                                                                    <label class="col-md-2 control-label" for="name"> Cobertura</label>
                                                                    <div class="col-lg-3 control-label" style="padding-top: 29px;">
                                                                        <div id="discountp" style="display: none;">0</div>
                                                                        <div id="cobertura-toggle" class="toggle toggle-success"></div>
                                                                    </div>
                                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                                                <div class="pull-right">
                                                                    <!--<a id="new_patient" href="#" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalNewPatient"><i class="md md-person-add"></i> Crear Paciente</a>-->
                                                                    <a id="new_service" href="#" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalNewService"><i class="md md-create"></i> Crear Servicio</a>
                                                                    <a id="add" href="#" class="btn btn-primary waves-effect waves-light"> <i class="md md-add-box"></i> Agregar Venta</a>
                                                                </div>  
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Item</th>
                                                            <th>Cantidad</th>
                                                            <th>Precio U.</th>
                                                            <th>Importe</th>
                                                            <th></th>
                                                        </tr></thead>
                                                        <tbody id="list-content">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row" style="border-radius: 0px">
                                            <div id="totales" class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Descuento ({{ $client->coverage->cop_var or '0'}}%) :</b>0.00</p>
                                                <p class="text-right"><b>Op. Gravada:</b> 0.00</p>
                                                <p class="text-right"><b>Op. No Gravada:</b> 0.00</p>
                                                <p class="text-right"><b>Op. Exonerada:</b> 0.00</p>
                                                <p class="text-right"><b>Subtotal:</b> 0.00</p>
                                                <p class="text-right"><b>IGV (18%) :</b> 0.00</p>
                                                <hr>
                                                <h3 class="text-right">S./ 0.00</h3>
                                            </div>
                                        </div>

                                        <hr>
                                                                    <div id="payments_options" class="pull-left text-left col-md-4">
                                                                            <p><strong>Tipo de Pago:</strong> <select class="form-control" id="pay_type" name="pay_type"><option value="">Seleccione el tipo de Pago</option><option value="1" selected>Efectivo</option></select></p>
                                                                            <p style="display:none;"><strong>Tipo de Documento: </strong> <select class="form-control" id="pay_edocument_type" name="pay_edocument_type"><option value="">Seleccione el tipo de Documento</option><option value="1">Boleta Paciente</option><option value="3">Boleta DNI</option><option value="4" selected>Boleta No DNI</option><option value="2">Factura RUC</option></select></p>
                                                                            <p><strong>Vista de Impresión: </strong> <select class="form-control" id="pay_edocument_view" name="pay_edocument_view><option value="">Seleccione la visa de Impresión</option><option value="1" selected>Ticketera</option><option value="2">Media Hoja</option></select></p>
                                                                            <p><strong>Mail :</strong><input id="mail" name="mail" type="text" class="form-control"> </p>
                                                                             <p><strong>Anotación :</strong><input id="anotacion" name="anotacion" type="text" class="form-control"> </p>
                                                                            <p style="display: none;"><strong>RUC :</strong><input id="ruc" name="ruc" type="text" class="form-control"> </p>
                                                                            <p style="display: none;"><strong>DNI :</strong><input id="dni" name="dni" type="text" class="form-control"> </p>
                                                                    </div>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a id="print-button" href="#" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-print"></i> <span>Imprimir Voucher</span></a>
                                                
                                            </div>  
                                        </div>
                                    </div>
                                </div>

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

        <script src="/assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/toggles/toggles.min.js"></script>
        
        <script type="text/javascript">
            var discountt = 0.00;
            var discount = 0.00;
            var importe = 0.00;
            var opgravada = 0.00;
            var opnogravada = 0.00;
            var opexonerada = 0.00;
            var subtotal = 0.00;
            var igv = 0.00;
            var total = 0.00;
            var igv_option = true;
            jQuery(document).ready(function($) {
                
                $("#submitService").click(function(){
                    var name = $("#name").val();
                    var code = $("#code").val();
                    var contable_area = $("#service_contable_code option:selected").text();
                    var clinic_area = $("select[name='new_clinic_area_id']").val();
                    if ($('#igv_checkbox').is(":checked"))
                    {
                        var unitary = parseFloat($("#unitary").val()/1.18).toFixed(2);
                    }else{
                        var unitary = $("#unitary").val();
                    }
                    var values = {'name': name, 'code': code, 'contable_name': contable_area, 'clinic_area_id': clinic_area, 'unitary': unitary}; 
                    var data = JSON.stringify(values);
                    console.log(data);
                    $.ajax(
                              {
                                  url: "{{ url('/caja/crear/servicio/') }}/"+data, 
                                  method: "GET",
                                   success: function(result)
                                  {
                                    data = $.parseJSON(result);
                                    if(data.status ==  "success"){
                                        $("select[name='code_id']").append($('<option>', {value: data.s.id, text: data.s.name +" | " + data.s.code }));
                                    }else{
                                        alert(data.s);
                                    }
                                    $("#modalNewService").modal('toggle');
                                  }
                                });
                });


            @if($client->coverage)
                @if($client->coverage->cop_var != 0)
                    $('#cobertura-toggle').toggles({on: true});
                @else
                    $('#cobertura-toggle').toggles({on: false});
                @endif
            @else
                $('#cobertura-toggle').toggles({on: false});
            @endif

                $('#igv-option-toggle').toggles({on: true});

                $('#search-cedula').click(function(){
                    var val = $('#document_identity_code').val();
                    $.ajax({
                                  url: "{{ url('/cedulaAPI/') }}/"+val, 
                                  method: "GET",
                                   success: function(result)
                                  {
                                    data = $.parseJSON(result);
                                    $('#information-personal').html('<address><p><strong>Documento: </strong> '+data.document+' </p><p class="m-t-10"><strong>Cliente: </strong> '+data.full_name+' </p></address>');
                                    $('#pay_edocument_type').val(data.type);
                                    console.log(data.document.length);
                                    if(data.document.length == 8){
                                        $("#dni").val(data.document);
                                    }else if(data.document.length == 11){
                                        $("#ruc").val(data.document);
                                    }
                                  }
                                });
                });


                $('#cobertura-toggle').on('toggle', function(e, active) {
                      if (active) {
                        $("#discountp").text("0");
                      } else {
                        $("#discountp").text(0);
                      }
                });

                $('#igv-option-toggle').on('toggle', function(e, active) {
                      if (active) {
                        igv_option = true;
                        $('input[name="factor"]').val('1').attr("disabled", true);
                      } else {
                        igv_option = false;
                        $('input[name="factor"]').val('1').attr("disabled", true);
                      }
                });
                $("#add").click(function(){
                    console.log(igv_option);
                    var discountp = $("#discountp").text();
                    var doctor = $('select[name="doctor_id"] option:selected').text();
                    var doctor_id = $('select[name="doctor_id"] option:selected').val();
                    var service = $('select[name="code_id"] option:selected').text();
                    var service_id = $('select[name="code_id"] option:selected').val();
                    var clinic_area_id = $('select[name="clinic_area_id"]').val();
                    var arr = service.split('|');
                    var factor = parseFloat($('input[name="factor"]').val());
                    if(igv_option == true){
                        var unitario = parseFloat($('input[name="unitary"]').val()/1.18);
                    }else{
                        var unitario = parseFloat($('input[name="unitary"]').val());
                    }
                    

                    var cantidad = parseFloat($('input[name="cantidad"]').val()).toFixed(2);
                    var pu = parseFloat(factor * unitario).toFixed(2);
                    var imp = parseFloat(pu*cantidad).toFixed(2);
                    var exonerado = $('select[name="service_exented_id"]').val();
                    if(doctor == "Seleccione un doctor"){ alert("Seleccione un doctor porfavor."); return false;}
                    if(service == "Seleccione un servicio"){ alert("Seleccione un servicio porfavor."); return false;}
                    if(unitario == "0.00"){ alert("No ha ingresado el precio unitario."); return false;  }
                    importe = (parseFloat(importe) + parseFloat(imp));
                    discount = (parseFloat(imp)*(parseFloat(discountp)/100)).toFixed(2);
                    discountt = (parseFloat(discountt)+parseFloat(discount)).toFixed(2);
                    if(exonerado == 1){
                        opgravada = ((parseFloat(opgravada) + parseFloat(imp) - parseFloat(discount))).toFixed(2);
                        var btn = "btn-success";
                    } else{
                        opnogravada = ((parseFloat(opnogravada) + parseFloat(imp) - parseFloat(discount))).toFixed(2);
                        var btn = "btn-warning";
                    }
                    opgravada = parseFloat(opgravada).toFixed(2);
                    opexonerada = parseFloat(opexonerada).toFixed(2);
                    opnogravada = parseFloat(opnogravada).toFixed(2);
                    subtotal = (parseFloat(opgravada) + parseFloat(opnogravada) + parseFloat(opexonerada)).toFixed(2); 
                    igv = (parseFloat(opgravada) * 0.18).toFixed(2);
                    total = parseFloat(parseFloat(subtotal)+parseFloat(igv)).toFixed(2);
                    $("#totales").html('<p class="text-right"><b>Descuento ({{ $client->coverage->cop_var or "0"}}%) :</b> '+discountt+'</p><p class="text-right"><b>Op. Gravada:</b> '+opgravada+'</p><p class="text-right"><b>Op. No Gravada:</b> '+opnogravada+'</p><p class="text-right"><b>Op. Exonerada:</b> '+opexonerada+'</p><p class="text-right"><b>Subtotal:</b> '+subtotal+'</p><p class="text-right"><b>IGV (18%) :</b> '+igv+'</p><hr><h3 class="text-right">S./ '+total+'</h3>');

                    $("#list-content").append("<tr id='"+arr[1].replace(/\s/g,'')+"' service_id='"+service_id+"' exented='"+exonerado+"' quantity='"+cantidad+"' pu='"+pu+"' imp='"+imp+"' doctor_id='"+doctor_id+"' clinic_area='"+clinic_area_id+"' discountp='"+discountp+"'><td>"+arr[1]+"</td><td>"+arr[0].substr(0, 45)+" ("+doctor.substr(0, 40)+")</td><td>"+cantidad+"</td><td>"+pu+"</td><td>"+imp+"</td><td><a val='"+arr[1]+"' onclick='deleteb(this)' class='btn "+btn+" btn-custom waves-effect waves-light m-b-5 delete-button'>-</a></td></tr>");

                    return false;

                });
                $('select.select2').select2({ width: 'resolve' });   
                $('select[name="code_id"]').change(function(){

                    var data = JSON.stringify({'id': '105098', 'service_id': $(this).val()});
                    $.ajax(
                              {
                                  url: "{{ url('/ServiceFindAPI/') }}/"+data, 
                                  method: "GET",
                                   success: function(result)
                                  {
                                    data = $.parseJSON(result);
                                    $('input[name="quantity"]').val(1);
                                    $('select[name="clinic_area_id"]').val(data.service.clinic_area_id);
                                    //$('input[name="unitary"]').val(parseFloat(result.unitary*1).toFixed(2));
                                  }
                                });
                });
                $("#print-button").click(function(e){
                    e.preventDefault();
                    if(window.confirm('¿Está seguro de generar el documento?')){
                        $(".hidden-print").slideUp(); 
                        $("#payments_options").slideUp();
                        $(".delete-button").slideUp();
                        $("#add-item").slideUp();
                        $("#add").parent().slideUp().prev().remove();

                        var values = { 'authorization_id' : '105098', 'discountp' : '0', 'discountt' : discountt, 'importe' : importe, 'opgravada' : opgravada, 'opnogravada' : opnogravada, 'opexonerada' : opexonerada, 'subtotal' : subtotal , 'igv' : igv, 'total': total, 'is_coverage' : 0, 'payment_type' : $("#pay_type").val(), 'view_print': $("#pay_edocument_view").val(), 'payment_document_type' : $("#pay_edocument_type").val(), 'DNI' : $("#dni").val(), 'RUC': $("#ruc").val(), 'Mail' : $("#mail").val(), "anotation": $("#anotacion").val()};
                        var items = {};
                        var a = 0;
                        $("#list-content tr").each(function(){
                            items[a] =  {'service_id': $(this).attr('service_id'), 'exented' : $(this).attr('exented'), 'quantity':$(this).attr('quantity'), 'pu' : $(this).attr('pu'), 'imp': $(this).attr('imp'), 'doctor_id': $(this).attr('doctor_id'), 'clinic_area_id' : $(this).attr('clinic_area'), 'discountp': $(this).attr('discountp')};
                            a++;
                        });
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
                    return false;
                })
            });

            function deleteb(i){
                var discountp = $(i).parent().parent().attr('discountp');
                var cantidad = $(i).parent().parent().attr('quantity');
                var pu = $(i).parent().parent().attr('pu');
                var imp = $(i).parent().parent().attr('imp');
                var exonerado = $(i).parent().parent().attr('exented');
                discount = (parseFloat(imp)*(parseFloat(discountp)/100)).toFixed(2);
                discountt = (parseFloat(discountt)-parseFloat(discount)).toFixed(2);
                if(exonerado == 1){
                    opgravada = ((parseFloat(opgravada) - parseFloat(imp) + parseFloat(discount))).toFixed(2);
                } else{
                    opnogravada = ((parseFloat(opnogravada) - parseFloat(imp) + parseFloat(discount))).toFixed(2);
                }
                opgravada = parseFloat(opgravada).toFixed(2);
                opexonerada = parseFloat(opexonerada).toFixed(2);
                opnogravada = parseFloat(opnogravada).toFixed(2);
                subtotal = (parseFloat(opgravada) + parseFloat(opnogravada) + parseFloat(opexonerada)).toFixed(2); 
                igv = (parseFloat(opgravada) * 0.18).toFixed(2);
                total = parseFloat(parseFloat(subtotal)+parseFloat(igv)).toFixed(2);
                $("#totales").html('<p class="text-right"><b>Descuento ({{ $client->coverage->cop_var or "0"}}%) :</b> '+discountt+'</p><p class="text-right"><b>Op. Gravada:</b> '+opgravada+'</p><p class="text-right"><b>Op. No Gravada:</b> '+opnogravada+'</p><p class="text-right"><b>Op. Exonerada:</b> '+opexonerada+'</p><p class="text-right"><b>Subtotal:</b> '+subtotal+'</p><p class="text-right"><b>IGV (18%) :</b> '+igv+'</p><hr><h3 class="text-right">S./ '+total+'</h3>');

                $(i).parent().parent().remove();
            }
        </script>

    
    </body>
</html>