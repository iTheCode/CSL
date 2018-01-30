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

        <link href="/assets/plugins/fullcalendar/dist/fullcalendar.css" rel="stylesheet">
        <link href="/assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css">

        <!--timepicker-->
        <link rel="stylesheet" type="text/css" href="/assets/plugins/timepicker/bootstrap-timepicker.min.css">

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
           
                <!-- Start content -->
                 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                          <div class="row"> 
                            <div class="col-lg-12"> 
                                <ul class="nav nav-tabs navtab-bg"> 
                                    <li class=""> 
                                        <a href="#FACTURACIÓN" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                            <span class="hidden-xs">FACTURACIÓN</span> 
                                        </a> 
                                    </li> 
                                    <li class="active"> 
                                        <a href="#PRESTACIÓN" data-toggle="tab" aria-expanded="true"> 
                                            <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                            <span class="hidden-xs">PRESTACIÓN</span> 
                                        </a> 
                                    </li> 
                                    <li class=""> 
                                        <a href="#ASIGNACIÓN" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                            <span class="hidden-xs">ASIGNACIÓN</span> 
                                        </a> 
                                    </li> 
                                    <li class=""> 
                                        <a href="#PRODUCTOS" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">PRODUCTOS</span> 
                                        </a> 
                                    </li> 
                                    <li class=""> 
                                        <a href="#DENTALES" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">DENTALES</span> 
                                        </a> 
                                    </li> 
                                    <li class=""> 
                                        <a href="#VISTA" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">VISTA</span> 
                                        </a> 
                                    </li> 
                                </ul> 
                                <div class="tab-content"> 
                                    <div class="tab-pane active" id="FACTURACIÓN"> 
                                        <label for="exampleInputEmail1">INFORMACIÓN DE FACTURA</label>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Exonerado de trama </label>
                                                <input id="checkbox1" type="checkbox">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Anotación :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="F/ant 001-20556 (se re-factura x cambio de año a 2018) S/F">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Código de la IAFAS :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Número de Autorización :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="980000449901">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ruc de la clínica (por SUNAT) :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="20494306043 ">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Código de la clínica (por SUNASA) :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="101130c ">
                                            </div>
                                            <label for="exampleInputEmail1">Seleciona Aseguradora :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">SANITAS PERU S.A. - EPS   </option>
                                                                                                                    
                                                        </select>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Razón social:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="SANITAS PERU S.A. - EPS ">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">RUC de aseguradora :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="20523470761">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Dirección de aseguradora :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="AV Ricardo Rivera Navarro">
                                            </div>
                                            <label for="exampleInputEmail1">Tipo de documento de pago :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Factura</option>
                                                            <option value="1">Boleta</option>                                                       
                                                        </select>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">N° de documento de pago :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="F001-0023338">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Fecha de Emisión :</label>
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                            </div>
                                            <label for="exampleInputEmail1">Indicador Global :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Individual</option>
                                                            <option value="1">Global</option>                                                       
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Producto Rimac :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">NO APLICA</option>
                                                                                                             
                                                        </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                        
                                                    </div>
                                                </div>
                                            <label for="exampleInputEmail1">Tipo de nota de crédito :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Anulación de la óperación</option>
                                                            <option value="1">Anulación por error del RUC</option> 
                                                            <option value="1">Correción por error en la descripción</option>
                                                            <option value="1">Descuento global</option>
                                                            <option value="1">Desuento por item</option>
                                                            <option value="1">Devolución total</option>
                                                            <option value="1">Devolución por item</option>
                                                            <option value="1">Bonificación</option>
                                                            <option value="1">Disminución en el valor</option>
                                                            <option value="1">Otros Conceptos</option>                                                      
                                                        </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Descripción de la Nota de Crédito :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Emitir nota de crédito</button>
                                                        
                                                    </div>
                                            </div>
                                    </div> 
                                    <div class="tab-pane" id="PRESTACIÓN">
                                        <label for="exampleInputEmail1">INFORMACIÓN DE AUTORIZACIÓN</label><br>
                                        <label for="exampleInputEmail1"><---------------Del Paciente-------------></label>
                                            <br>
                                            <label for="exampleInputEmail1">Tipo de afiliación:</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">REGULAR </option>
                                                            <option value="1">POTESTATIVA</option>
                                                            <option value="1">SCTR</option>
                                                            <option value="1">PEAS PURO</option>
                                                            <option value="1">PEAS COMPLEMENTO</option>
                                                                                                                    
                                                        </select>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nombre del paciente:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="RIOS ROJAS CRISTELL TATIANA">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">N° de DNI:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="42321191">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Código del asegurado:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="300058809">
                                            </div>
                                            <label for="exampleInputEmail1">Tipo de autorización:</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Sin seleccionar </option>
                                                            <option value="1">Solicitud de Atención Médica(Solicitud de Beneficio)/SITEDS-01</option>
                                                            <option value="1">Solicitud de chequeo Médico/SITEDS-02</option>
                                                            <option value="1">Carta de Garantía-03</option>
                                                            <option value="1">Por Código-04</option>
                                                            <option value="1">Voucher-05</option>
                                                            <option value="1">Otro tipo de Autorización-06</option>
                                                            <option value="1">Declaración accidente-07</option>
                                                            <option value="1">No aplica-99</option>  
                                                        </select>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">N° de autorización:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="980000449901">
                                            </div>
                                            <label for="exampleInputEmail1">Compañia:</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">PERUPLAST S A</option>
                                                                                                                    
                                                        </select>
                                            </div><br>
                                            <label for="exampleInputEmail1">Producto Pacífico:</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Ninguno escogido</option>
                                                            <option value="1">ADMI</option>
                                                            <option value="1">AM10</option>
                                                            <option value="1">ACES</option>
                                                            <option value="1">AM05</option>
                                                            <option value="1">FOLA</option>
                                                            <option value="1">MINT</option>
                                                            <option value="1">MNAC</option>
                                                            <option value="1">MPLN</option>
                                                            <option value="1">MSLD</option>
                                                            <option value="1">SEAU</option>
                                                            <option value="1">SECO</option>                                                      
                                                        </select>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nombre profesional : xxxxxxx</label>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">DNI profesional:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="42772238">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Código de colegiatura:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="056158">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">N° de historia clínica : xxxxxxx</label>
                                                
                                            </div>
                                            <label for="exampleInputEmail1"><---------------De las autorizaciones-------------></label><br>
                                            <label for="exampleInputEmail1">Tipo de document adjunto:</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Sin seleccionar </option>
                                                            <option value="1">Solicitud de Atención Médica(Solicitud de Beneficio)/SITEDS-01</option>
                                                            <option value="1">Solicitud de chequeo Médico/SITEDS-02</option>
                                                            <option value="1">Carta de Garantía-03</option>
                                                            <option value="1">Por Código-04</option>
                                                            <option value="1">Voucher-05</option>
                                                            <option value="1">Otro tipo de Autorización-06</option>
                                                            <option value="1">Declaración accidente-07</option>
                                                            <option value="1">No aplica-99</option>  
                                                        </select>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Código de documento adjunto:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="Si no aplica, debes de ver este texto.">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Control interno de autorización:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="8004009">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Código de historia clínica:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="00060579">
                                            </div><br>
                                            <label for="exampleInputEmail1"><---------------De la prestación-------------></label>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tipo de cobertura: XXXXX</label>
                                                
                                            </div>
                                            <label for="exampleInputEmail1">Sub tipo de cobertura:</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Ninguno escogido</option>
                                                                                                                 
                                                        </select>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Primer Diagnóstico:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="G44.2">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Segundo Diagnóstico:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="G40.2">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tercer Diagnóstico:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Fecha de la prestación:</label>
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                            </div>
                                            <label for="exampleInputEmail1">Tipo de hospitalización:</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Ingrese un tipo de hospitalizacion</option>
                                                            <option value="1">Hospitalización Clínica, no se efectúa procedemiento quirúrgico</option>
                                                            <option value="1">Hospitalización Quirúrgica, se efectúa procedimientos quirúrgico o de naturaleza obstetra</option>
                                                                                                                 
                                                        </select>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Fecha de hospitalización:</label>
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                            </div>
                                            <label for="exampleInputEmail1">Tipo de salida:</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">Ingrese un tipo de salida</option>
                                                            <option value="1">Alta Médica</option>
                                                            <option value="1">Alta voluntaria</option>
                                                            <option value="1">Transferencia a otro establecimiento de la IAFAS</option>
                                                            <option value="1">Transferencia a ESSALUD</option>
                                                            <option value="1">Foga o abandono</option>
                                                            <option value="1">Defunción</option>
                                                            <option value="1">Egreso de facturación(sigue hospitalizado)</option>
                                                        </select>
                                            </div><br>
                                              
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Fecha de salida:</label>
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Días de hospitalizacíón:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Guardar cambios</button>
                                                        
                                                    </div>
                                            </div>

                                    </div> 
                                    <div class="tab-pane" id="ASIGNACIÓN">
                                        <div class="panel panel-default panel-fill">
                                        <div class="panel-heading"> 
                                        <h3 class="panel-title">Asignación de servicios y productos</h3>
                                    </div></div>
                                    </div> 
                                    <div class="tab-pane" id="PRODUCTOS">
                                         
                                        <div class="panel panel-default panel-fill">
                                        <div class="panel-heading"> 
                                        <h3 class="panel-title">Servicios asignados</h3> 
                                        </div> 
                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Código</th>
                                                                        <th>Nombre</th>
                                                                        <th>Médico</th>
                                                                        <th>Cantidad</th>
                                                                        <th>Unitario</th>
                                                                        <th>Monto</th>
                                                                        <th>Copago</th>
                                                                        <th>Correlativo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                                                
                                                                        
                                                                </tbody>
                                                            </table>
                                                        </div>

                                    </div> 
                                </div>
                                <div class="panel panel-default panel-fill">
                                        <div class="panel-heading"> 
                                        <h3 class="panel-title">Productos asignados</h3> 
                                        </div> 
                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Código</th>
                                                                        <th>Nombre</th>
                                                                        <th>Monto</th>
                                                                        <th>Copago</th>
                                                                        <th>Correlativo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                                                
                                                                        
                                                                </tbody>
                                                            </table>
                                                        </div>

                                    </div> 
                                </div>

                                            <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Editar Factura</button>
                                                        
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Copago fijo:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Copago variable:</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">corregir copago</button>
                                                        
                                                    </div>
                                            </div>

                                    </div> 
                                    <div class="tab-pane" id="DENTALES">
                                        <label for="exampleInputEmail1">Código de Documento de Pago:</label>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Código de pieza dental :</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="Código Dental">
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación de Mesial :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación de Lingual :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación en Distal :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación  Vestibular :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación en Palatina :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación en toda la pieza :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación en Oclusal :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación en Cervical :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                            <label for="exampleInputEmail1">Curación en Incisal :</label>
                                            <div class="input-group col-md-12">
                                                        <select name="opcion" class="form-control">
                                                            <option value="1">curado</option>
                                                            <option value="2">no curado</option>                                                           
                                                        </select>
                                            </div>
                                            <br>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                        <button class="btn btn-default waves-effect" type="button">Cancel</button>
                                                    </div>
                                                </div>
                                        
                                    </div> 
                                    <div class="tab-pane" id="VISTA">
                                        
                                        <div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
     <br><br>
<table width="99%"id="fact-header" border="0" style="font-size:15px;"> 
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td><img alt="Logo" class="img-thumbnail" height="200" src="/assets/images/logo.png" width="200"><br>CLINICA SEÑOR DE LUREN DE ICA S.A.C.</td>
    <td align="center">Av. San Martín. N° 536 , Ica Ica<br>Telef.: (056) 211989<br>http://clinicaluren.com.pe</td>
    <td align="center" ><div style="border:1px solid #0992c5;border-radius:5px;padding-top: 10px;"><p style="font-size:14px"><b>FACTURA ELECTRONICA</b></p><p style="font-size:14px">R.U.C. 20494306043</p><p style="font-size:14px"><b>F001-0020000</b></p></div></td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td width="450">
      <b>SEÑOR(ES): </b>Rimac S.A. Entidad Prestadora de Salud. 
    </td>
    <td width="250"></td>
    <td width="200"></td>
  </tr>
  <tr>
    <td>
      <b>DIRECCION: </b>Jr Carpaccio Nº 296 San Borja.  
    </td>
    <td>
      <b>R.U.C.: </b>20414955020  
    </td>
    <td></td>
  </tr>
  <tr>
    <td>
      <b>PACIENTE: </b>ZAPATA NAVARRO MARIA GRAZZIA 
    </td>
    <td>
      <b>N° DE ATENCION: </b>1727703457 
    </td>
    <td></td>
  </tr>
  <tr>
    <td>
      <b>TITULAR: </b>NAVARRO MUÑOZ EVELYN FIORELA  
    </td>
    <td>
      <b>FECHA DE EMISION: </b>22/11/2017 
    </td>
    <td>
      <b>EMPRESA: </b>NUMAY SOCIEDAD ANONI  
    </td>
  </tr>
</table><br>
<table width="99%" style="font-size:14px;border:1px solid #0992c5;border-radius:20px;">
  <tr border=1 style="background-color:#64bee0;">
    <td>Código</td>
    <td align="center" >Descripcion</td>
    <td>Cantidad</td>
    <td>P. unit</td>
    <td>Total</td>
  </tr>
  <tbody>
    <tr>
      <td width="80">50.01.01</td>
      
      <td width="700">CONSULTA AMBULATORIA POR MEDICO ESPECIALISTA(21/11) <span style="font-size:10px">  (BAZZETTI BRICEÑO, MARIO)</span>
      </td>
      <td width="110" align="left">1.0</td>
      <td align="left">50.00</td>
      <td  align="right">50.00</td>
    </tr>
    <tr>
      <td>Farmacia</td>
      <td>Gastos de farmacia 165095 - </td>
      <td width="110"></td>
      <td></td>
      <td align="right">88.72</td>
    </tr>
    
    <tr>
      <td width="80"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="700"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="50"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="100"><div style="font-size:10px;">&nbsp; </div></td>
      <td><div style="font-size:10px;">&nbsp; </div></td>
    </tr>
    <tr>
      <td width="80"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="700"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="50"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="100"><div style="font-size:10px;">&nbsp; </div></td>
      <td><div style="font-size:10px;">&nbsp; </div></td>
    </tr>
    <tr>
      <td width="80"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="700"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="50"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="100"><div style="font-size:10px;">&nbsp; </div></td>
      <td><div style="font-size:10px;">&nbsp; </div></td>
    </tr>
    <tr>
      <td width="80"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="700"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="50"><div style="font-size:10px;">&nbsp; </div></td>
      <td width="100"><div style="font-size:10px;">&nbsp; </div></td>
      <td><div style="font-size:10px;">&nbsp; </div></td>
    </tr>
    

    <tr>
      <td colspan="2"></td>
      <td>Copago fijo</td>
      <td align="right">S/.</td>
      <td align="right">(29.66)</td>
    </tr>
    <tr>
      <td colspan="2 "></td>
      <td>Copago var</td>
      <td align="right">S/.</td>
      <td align="right">(8.87)</td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td>Op. Gravada</td>
      <td align="right">S/.</td>
      <td align="right">100.19</td>
    </tr>                <tr>
                        <td colspan="2"></td>
                        <td>Op. No Gravada</td>
                        <td align="right">S/.</td>
                        <td align="right">0.00</td>
                </tr>
                <tr>
                        <td colspan="2"></td>
                        <td>Op. Exonerada</td>
                        <td align="right">S/.</td>
                        <td align="right">0.00</td>
                </tr>

                <tr>
                        <td colspan="2"></td>
                        <td>Subtotal</td>
                        <td align="right">S/.</td>
                        <td align="right">100.19</td>
                </tr>

    <tr>
      <td colspan="2"></td>
      <td>IGV 18%</td>
      <td align="right">S/.</td>
      <td align="right">18.03</td>
    </tr>
    <tr>
      <td colspan="2">
        SON : CIENTO DIECIOCHO Y 22/100 SOLES
      </td>
      <td>Total</td>
      <td align="right">S/.</td>
      <td align="right">118.22</td>
    </tr>
  </tbody>
</table><br>
<!--<div align="left">Autorizado Mediante Resolución N° 203-2015/SUNAT</div><br>-->
<div align="center" style="border-style: double;width:99%;" alig>Representación impresa de la factura electrónica generada desde el sistema CSL. Puede verificarla utilizando su clave SOL</br>Autorizado Mediante Resolución N° 203-2015/SUNAT</div>

   </div>
</div>
                                    </div>
                                </div> 
                            </div> 

                         <!-- end row -->

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ==========================

                </div> <!-- container -->
                               
                </div> <!-- content -->
                <footer class="footer text-right">
                    {{ $this_year}} © {{ $system_name }}
                </footer>
                </div>

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
        <script src="/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="/assets/plugins/counterup/jquery.counterup.min.js"></script>
        <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <!-- jQuery  -->
        <script src="/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        
  
        <script src="/assets/plugins/fullcalendar/dist/moment.min.js"></script>
        <script src="/assets/plugins/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="/assets/plugins/fullcalendar/dist/es.js"></script>
        <script src="/assets/pages/jquery.fullcalendar.js"></script>

        <script type="text/javascript" src="/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            function load_data(page = null,object = null){
                    $('.panel-body').slideUp(1000);
                    if(object != null){ data = object.val(); }else{data = null;}
                    $.ajax(
                              {
                                  url: "{{ url('/authorizationsAPI/') }}/{\"data\": \""+data+"\", \"from\": \"triaje\"}?page="+page, 
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
                jQuery('#datepickera').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                        numberOfMonths: 3,
                        showButtonPanel: true
                });

                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15})
            });

        </script>

    
    </body>
</html>