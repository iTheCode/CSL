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
                                        <a href="#PRODUCTOS" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">VENTAS</span> 
                                        </a> 
                                    </li> 
                                    
                                    <li class="active"> 
                                        <a href="#VISTA" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">VISTA</span> 
                                        </a> 
                                    </li> 
                                </ul> 
                                <div class="tab-content">        
                                   <div class="tab-pane " id="PRODUCTOS"> 
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

                                    
                                    <div class="tab-pane active" id="VISTA">
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