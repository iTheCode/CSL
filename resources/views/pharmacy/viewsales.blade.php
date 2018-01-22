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
                            <div class="col-lg-6"> 
                                <ul class="nav nav-tabs navtab-bg">                       
                                    <li class="active"> 
                                        <a href="#PRODUCTOS" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">VENTAS</span> 
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
                                   <div class="tab-pane active" id="PRODUCTOS"> 
                                   <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Acciones administrativas</h3></div>
                                    <div class="panel-body">
                                    
                                        <form class="form-inline" role="form">
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">                                            </div>
                                              
                                            
                                             <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">Editar Factura</button>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">Eliminar Factura</button>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                             
                        </div>         
                                        <div class="panel panel-default panel-fill">
                                        <div class="panel-heading"> 
                                        <h3 class="panel-title">Ventas asignados</h3> 

                                        </div> 
                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Código</th>
                                                                        <th>Cantidad</th>
                                                                        <th>Precio</th>
                                                                        <th>Base Imponible</th>
                                                                        <th>Descuento</th>
                                                                        <th>Inicial</th>
                                                                        <th>Copago</th>
                                                                        <th>IGV</th>
                                                                        <th>Monto Final</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                                                
                                                                        
                                                                </tbody>
                                                            </table>
                                        </div>

                                    </div> 
                                </div>
                                          
                                        <!-- Inline Form -->
                              
                                    </div> 

                                    
                                    <div class="tab-pane" id="VISTA">
                                        <table width="98%" border="1" style="font-size: 9px;" rules="groups" >
<colgroup span="4"></colgroup>
<colgroup span="0"> </colgroup>
<colgroup span="5"></colgroup>
<tbody>
  <tr style="font-size: 15px;">
    <td colspan="4" align="center"><strong>CLINICA SEÑOR DE LUREN DE ICA SAC</strong></td>
    
  <td>
    
  </td>
    <td colspan="5" align="center"><strong>CLINICA SEÑOR DE LUREN DE ICA SAC</strong></td>
    
  </tr>
        
  <tr>
    <td colspan="4" align="center"><strong>Av. San Martin Nº 536 Urb. La Morales Ica-Peru</strong></td>
    <td></td>
    <td colspan="5" align="center"><strong>Av. San Martin Nº 536 Urb. La Morales Ica-Peru</strong></td>
  </tr>
  <tr>
    <td colspan="4" align="center"><strong>Telefono:</strong></td>
    <td></td>
    <td colspan="5" align="center"><strong>Telefono:</strong></td>
  </tr>
  <tr>
    <td colspan="4" align="center"><strong>RUC Nº : 20494306043</strong></td>
    <td></td>
    <td colspan="5" align="center"><strong>RUC Nº : 20494306043</strong></td>
  </tr>
    </tbody>
  <tr>
    <td width="12.6%"><strong>Nº AUTORIZACION</strong></td>
    <td colspan="3">1828930754</td>
    <td></td>
    <td width="14%"><strong>Nº AUTORIZACION</strong></td>
    <td colspan="4">1828930754</td>
  </tr>
    
  <tr>
    <td><strong>Nº carne Aseg.</strong></td>
    <td width="16%">0125925827</td>
    <td width="13%"><strong>Nº LIQUIDACION</strong></td>
    <td width="8%">168258</td>
    <td></td>
    <td><strong>Nº carne Aseg.</strong></td>
    <td width="16%">0125925827</td>
    <td width="13%"><strong>Nº LIQUIDACION</strong></td>
    <td width="8%" colspan="2">168258</td>
  </tr>
  <tr>
    <td><strong>FECHA</strong></td>
    <td colspan="3">2018-01-21 23:35:26 -0500</td>
    <td></td>
    <td><strong>FECHA</strong></td>
    <td colspan="4">2018-01-21 23:35:26 -0500</td>
  </tr>
  <tr>
    <td><strong>SEGURO</strong></td>
    <td colspan="3">Pacífico EPS</td>
    <td></td>
    <td><strong>SEGURO</strong></td>
    <td colspan="4">Pacífico EPS</td>
  </tr>
  
  <tr>
    <td><strong>PCTE</strong></td>
    <td colspan="3">ELIAS ORTIZ GABRIEL</td>
    <td></td>
    <td><strong>PCTE</strong></td>
    <td colspan="4">ELIAS ORTIZ GABRIEL</td>
  </tr>
  <tr>
    <td><strong>MEDICO</strong></td>
    <td colspan="3"></td>
    <td></td>
    <td><strong>MEDICO</strong></td>
    <td colspan="3"></td>
    <td></td>
  </tr>
</table>
<table rules="groups" border="1" width="98%"  style="font-size: 9px;">
<colgroup span="7"></colgroup>
<colgroup span="1"></colgroup>
<colgroup span="7"></colgroup>
<tbody>
  <tr>
    <td width="50%" align="center" colspan="7">MEDICINA</td>
    <td width="0%"></td>
    <td align="center" colspan="7">MEDICINA</td>
  </tr>
</tbody>
<tbody>
  <tr>
    <td align="center" width="5%">Cant.</td>
    <td align="center" width="6%">U/M</td>
    <td width="15%">Nombre</td>
    <td align="center" width="5%">Kairos</td>
    <td align="center" width="5%">Sin Igv</td>
    <td align="center" width="5%">Dcto</td>
    <td align="center" width="5%">Importe</td>
    <td></td>
    <td align="center" width="5%">Cant.</td>
    <td align="center" width="6%">U/M</td>
    <td width="15%">Nombre</td>
    <td align="center" width="5%">Kairos</td>
    <td align="center" width="5%">Sin Igv</td>
    <td align="center" width="5%">Dcto</td>
    <td align="center" width="5%">Importe</td>
  </tr>
  </tbody>
  <tbody>

    <tr>
      <td align="center">1</td>
      <td>Suspension </td>
      <td>A CORTIPREX 5mg/5mL </td>
      <td align="center">54.26</td>
      <td align="center">45.98</td>
      <td align="center">4.60</td>
      <td align="center">41.38</td>
      <td></td>
      <td align="center">1</td>
      <td>Suspension</td>
      <td>A CORTIPREX 5mg/5mL </td>
      <td align="center">54.26</td>
      <td align="center">45.98</td>
      <td align="center">4.60</td>
      <td align="center">41.38</td>
    </tr>

    <tr>
      <td align="center">1</td>
      <td>Suspension </td>
      <td>A ADAX 100mg/5mL </td>
      <td align="center">27.54</td>
      <td align="center">23.34</td>
      <td align="center">2.33</td>
      <td align="center">21.01</td>
      <td></td>
      <td align="center">1</td>
      <td>Suspension</td>
      <td>A ADAX 100mg/5mL </td>
      <td align="center">27.54</td>
      <td align="center">23.34</td>
      <td align="center">2.33</td>
      <td align="center">21.01</td>
    </tr>

    <tr>
      <td align="center">1</td>
      <td>Solucion </td>
      <td>A GINGISONA B 0.003 </td>
      <td align="center">37.24</td>
      <td align="center">31.56</td>
      <td align="center">3.16</td>
      <td align="center">28.40</td>
      <td></td>
      <td align="center">1</td>
      <td>Solucion</td>
      <td>A GINGISONA B 0.003 </td>
      <td align="center">37.24</td>
      <td align="center">31.56</td>
      <td align="center">3.16</td>
      <td align="center">28.40</td>
    </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
            <td colspan="1"></td>
            <td colspan="7">&nbsp;</td>
          </tr>
  </tbody>
  <tbody>
  <tr>
    <td colspan="4"></td>
    <td colspan="2">Total Kairos</td>
    <td align="center">119.04</td>
    <td></td>
    <td colspan="4"></td>
    <td colspan="2">Total Kairos</td>
    <td align="center">119.04</td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="2">Total restando Igv</td>
    <td align="center">100.88</td>
    <td></td>
    <td colspan="4"></td>
    <td colspan="2">Total restando Igv</td>
    <td align="center">100.88</td>
  </tr>
  <tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="2">Descuento 10%</td>
    <td align="center">10.09</td>
    <td></td>
    <td colspan="4"></td>
    <td colspan="2">Descuento 10%</td>
    <td align="center">10.09</td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="2">Subtotal a facturar</td>
    <td align="center">90.79</td>
    <td></td>
    <td colspan="4"></td>
    <td colspan="2">Subtotal a facturar</td>
    <td align="center">90.79</td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="2">IGV (18)</td>
    <td align="center">16.34</td>
    <td></td>
    <td colspan="4"></td>
    <td colspan="2">IGV (18)</td>
    <td align="center">16.34</td>
  </tr>
  <tr>
    <td align="center" colspan="4"></td>
    <td colspan="2">TOTAL</td>
    <td align="center">107.13</td>
    <td></td>
    <td align="center" colspan="4"></td>
    <td colspan="2">TOTAL</td>
    <td align="center">107.13</td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="2">Copago</td>
    <td align="center">0.00</td>
    <td></td>
    <td colspan="4"></td>
    <td colspan="2">Copago</td>
    <td align="center">0.00</td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="2">igv Cop</td>
    <td align="center">0.00</td>
    <td></td>
    <td colspan="4"></td>
    <td colspan="2">igv Cop</td>
    <td align="center">0.00</td>
  </tr>
  <tr>
    <td align="center" colspan="4">Firma del paciente</td>
    <td colspan="2">TOTAL Cop</td>
    <td align="center">0.00</td>
    <td></td>
    <td align="center" colspan="4">Firma del paciente</td>
    <td colspan="2">TOTAL Cop</td>
    <td align="center">0.00</td>
  </tr>

  </tbody>
  <tbody>
  <tr>
    <td align="center" colspan="5">&nbsp;70718499</td>
    <td></td>
    <td></td>
    <td></td>
    <td align="center" colspan="5">&nbsp;70718499</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td align="center" colspan="5">Nº DNI</td>
    <td style="font-size: 10px;">Usuario : farm_osmar</td>
    <td></td>
    <td></td>
    <td align="center" colspan="5">Nº DNI</td>
    <td style="font-size: 10px;">Usuario : farm_osmar</td>
    <td></td>
  </tr>
  </tbody>
</table>
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