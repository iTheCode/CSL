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
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right"><img src="/assets/images/logo.png"  width="250" height="70" alt="CSLuren"></h4>
                                                
                                            </div>
                                            <div class="pull-right">
                                                <h4>Atención #{{ $client->id }}<br>
                                                Autorización #{{ $client->code or 'XXXXXX'}}<br>
                                                Código Interno #{{ $client->intern_code or ''}}
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                    <p><strong>Tipo: </strong> {{ $client->insureds->insurance->name or 'Atención Particular' }} </p>
                                                    <p class="m-t-10"><strong>Paciente: </strong> {{ $client->patient->name }} {{ $client->patient->paternal }} {{ $client->patient->maternal }}</p>
                                                    <p class="m-t-10"><strong>Titular: </strong> {{ $client->insureds->hold_name or $client->patient->name }} {{ $client->insureds->hold_paternal or $client->patient->paternal }} {{ $client->insureds->hold_maternal or $client->patient->maternal }}</p>
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Fecha: </strong> {{ $date }}</p>
                                                    <p class="m-t-10"><strong>Empresa: </strong> {{ $client->insureds->company->name or 'No Posee' }}</p>
                                                    <p class="m-t-10"><strong>Cubierto al: </strong> {{ $client->coverage->cop_var or '0'}}%</p>
                                                </div>
                                                <div class="pull-left m-t-30">
                                                            <div class="col-md-4">
                                                            <label class="col-md-4 control-label" for="name"> Doctor *</label>
                                                                {{ Form::select('doctor_id', [null=>'Seleccione un doctor'] + $doctors, null, ['class' => 'select2 form-control col-md-2']) }}

                                                            </div>

                                                            <div class="col-md-4">
                                                            <label class="col-md-4 control-label" for="name"> Area *</label>
                                                                {{ Form::select('clinic_area_id', [null=>'Seleccione un área'] + $areas , null, ['class' => 'select2 form-control  col-md-2']) }}
                                                            </div>
                                                                <div class="col-md-4">
                                                                <label class="col-md-2 control-label" for="name"> Exento</label>
                                                                {{ Form::select('service_exented_id', $service_exented, null, ['class' => 'select2 form-control']) }}
                                                                </div>
                                                            <div class="col-md-4">
                                                                <label class="col-md-4 control-label" for="name"> Código *</label>
                                                                {{ Form::select('code_id', [null=>'Seleccione un servicio'], null, ['class' => 'select2 form-control']) }}
                                                            </div>

                                                                <div class="col-md-2">
                                                                <label class="col-md-3 control-label" for="name"> Factor</label>
                                                                @if($client->insureds)
                                                                    <input name="factor" type="text" class="form-control" value="{{ $client->insureds->insurance->factor->factor or 'Corregir Factor'}}">
                                                                @else
                                                                    <input name="factor" type="text" class="form-control" value="1" disabled>
                                                                @endif
                                                                </div>
                                                                <div class="col-md-3">
                                                                <label class="col-md-2 control-label" for="name"> Cantidad</label>
                                                                    <input name="cantidad" type="text" class="form-control" value="1">
                                                                </div>
                                                                <div class="col-md-3">
                                                                <label class="col-md-2 control-label" for="name"> Unitario</label>
                                                                    <input name="unitary" type="text" class="form-control" value="">
                                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                                                <div class="pull-right">
                                                                    <a id="add" href="#" class="btn btn-primary waves-effect waves-light">Agregar</a>
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
                                                                            <p><strong>Tipo de Documento: </strong> <select class="form-control" id="pay_edocument_type" name="pay_edocument_type"><option value="">Seleccione el tipo de Documento</option><option value="1" selected>Boleta Paciente</option><option value="3">Boleta DNI</option><option value="4">Boleta No DNI</option><option value="2">Factura RUC</option></select></p>
                                                                            <p style="display: none;"><strong>RUC :</strong><input id="ruc" name="ruc" type="text" class="form-control"> </p>
                                                                            <p style="display: none;"><strong>DNI :</strong><input id="dni" name="dni" type="text" class="form-control"> </p>
                                                                            <p><strong>Vista de Impresión: </strong> <select class="form-control" id="pay_edocument_view" name="pay_edocument_view><option value="">Seleccione la visa de Impresión</option><option value="1">Ticketera</option><option value="2" selected>Media Hoja</option></select></p>
                                                                    </div>
                                        <div class="hidden-print">
                                            <div class="pull-right"><br><br><br><br><br><br><br><br>
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
        
        <script type="text/javascript">
            var discountp = {{ $client->coverage->cop_var or '0'}};
            var discountt = 0.00;
            var discount = 0.00;
            var importe = 0.00;
            var opgravada = 0.00;
            var opnogravada = 0.00;
            var opexonerada = 0.00;
            var subtotal = 0.00;
            var igv = 0.00;
            var total = 0.00;
            jQuery(document).ready(function($) {
                $("#pay_edocument_type").change(function(){
                    var selected = $(this).val();
                    if(selected == 2){
                        $(this).parent().fadeOut(1000).next().fadeIn(2000).focus();
                    }else if(selected == 3){
                        $(this).parent().fadeOut(1000).next().next().fadeIn(2000).focus();
                    }
                });
                $("#add").click(function(){
                    var doctor = $('select[name="doctor_id"] option:selected').text();
                    var doctor_id = $('select[name="doctor_id"] option:selected').val();
                    var service = $('select[name="code_id"] option:selected').text();
                    var service_id = $('select[name="code_id"] option:selected').val();
                    var clinic_area_id = $('select[name="clinic_area_id"]').val();
                    var arr = service.split('|');
                    var factor = parseFloat($('input[name="factor"]').val());
                    var unitario = parseFloat($('input[name="unitary"]').val()/1.18);
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

                    $("#list-content").append("<tr id='"+arr[1]+"' service_id='"+service_id+"'' exented='"+exonerado+"' quantity='"+cantidad+"' pu='"+pu+"' imp='"+imp+"' clinic_area='"+clinic_area_id+"'><td>"+arr[1]+"</td><td>"+arr[0].substr(0, 45)+" ("+doctor.substr(0, 40)+")</td><td>"+cantidad+"</td><td>"+pu+"</td><td>"+imp+"</td><td><a id=\"delete\" val='"+arr[1]+"' onclick='deleteb(this)' class='btn "+btn+" btn-custom waves-effect waves-light m-b-5'>-</a></td></tr>");

                    return false;

                });
                $('select.select2').select2();
                $('select[name="clinic_area_id"]').change(function(){
                    var val = $(this).val();
                    $.ajax(
                              {
                                  url: "{{ url('/ServiceAPI/') }}/"+val, 
                                  method: "GET",
                                   success: function(result)
                                  {
                                    $('select[name="code_id"]').html(result);
                                    $('select[name="code_id"]').parent().find("a").find('span:first').text('Seleccione un servicio');
                                  }
                                });
                });
                $('select[name="code_id"]').change(function(){

                    var val = $(this).val();
                    $.ajax(
                              {
                                @if($client->insureds)
                                  url: "{{ url('/ServiceFindAPI/') }}/"+val, 
                                @else
                                  url: "{{ url('/ServicePFindAPI/') }}/"+val, 
                                @endif
                                  method: "GET",
                                   success: function(result)
                                  {
                                    $('input[name="unitary"]').val(parseFloat(result.unitary*1.18).toFixed(2));
                                  }
                                });
                });
                $("#print-button").click(function(){
                    var values = { 'authorization_id' : {{ $client->id }}, 'discountp' : {{ $client->coverage->cop_var or '0'}}, 'discountt' : discountt, 'importe' : importe, 'opgravada' : opgravada, 'opnogravada' : opnogravada, 'opexonerada' : opexonerada, 'subtotal' : subtotal , 'igv' : igv, 'total': total, 'is_coverage' : 0, 'payment_type' : $("#pay_type").val(), 'view_print': $("#pay_edocument_view").val(),'payment_document_type' : $("#pay_edocument_type").val(), 'DNI' : $("#dni").val(), 'RUC': $("#ruc").val()};
                    var items = {};
                    var a = 0;
                    $("#list-content tr").each(function(){
                        items[a] =  {'service_id': $(this).attr('service_id'), 'exented' : $(this).attr('exented'), 'quantity':$(this).attr('quantity'), 'pu' : $(this).attr('pu'), 'imp': $(this).attr('imp'), 'clinic_area_id' : $(this).attr('clinic_area') };
                        a++;
                    });
                    values['items'] = items;
                    var data = JSON.stringify(values);
                    console.log(data);
                    $.ajax({
                        url:"{{ url('/pay_edocument/') }}/"+data,
                        method: "GET",
                        success: function(result){

                        }
                    });
                })
            });

            function deleteb(i){
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

                $(i).parent().parent().empty();
            }
        </script>

    
    </body>
</html>