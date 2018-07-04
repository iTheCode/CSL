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
                                        <div id="print-hc" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog modal-lg"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Datos de Paciente</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <table>
                                                            <tbody><tr>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                                <td width="10%">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5">
                                                                    <img alt="Logo" height="70" src="/assets/images/logo.png" width="400">
                                                                </td>
                                                                <td colspan="2"></td>
                                                                <td style="font-size:10px" colspan="5">
                                                                    Servicios de: Emergencia, Ambulatorio, Hospitalización, Centro Quirúrgico, Salud Ocupacional y Ambulancia.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10px" colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"></td>
                                                                <td colspan="4" style="font-size:30px">
                                                                    HISTORIA CLÍNICA
                                                                </td>
                                                                <td colspan="4">
                                                                    <input class="form-control" id="clinic_history_code" name="clinic_history_code" type="text" value="66783">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr style="font-size:15px">
                                                                <td colspan="3"><strong>APELLIDOS Y NOMBRES</strong></td>
                                                                <td colspan="9"><input class="form-control" id="name" name="name" type="text" value="ROJAS CARBAJO AINARA FERNANDA"></td>
                                                            </tr>
                                                            <tr>
                                                                <td height="1px" colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr style="font-size:15px">
                                                                <td><strong>F. Nacimiento</strong></td>
                                                                <td colspan="2"><input class="form-control" id="" name="" type="text" value="21-03-2015"></td>
                                                                <td align="center"><strong>Edad : </strong></td>        
                                                                <td colspan="2"><input class="form-control" id="age" name="age" type="text" value="3"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr style="font-size:15px">
                                                                <td><strong>DNI</strong></td>
                                                                <td colspan="2">
                                                                    <form accept-charset="UTF-8" action="/actualizar_dni" data-remote="true" method="post" role="form"><div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                                                        <input id="patient_id" name="patient_id" type="hidden" value="93062">
                                                                        <input class="form-control" id="document_identity_code" name="document_identity_code" type="text" value="79028455">
                                                        </form>     </td>
                                                                <td align="center"><strong>Teléfono</strong></td>
                                                                <td colspan="2">
                                                                    <form accept-charset="UTF-8" action="/actualizar_telefono" data-remote="true" method="post" role="form"><div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                                                    <input id="patient_id" name="patient_id" type="hidden" value="93062">
                                                                        <input class="form-control" id="phone" name="phone" type="text" value="997404737">
                                                        </form>     </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>   
                                                            <tr style="font-size:15px">
                                                                <td><strong>Direccion</strong></td>
                                                                <td colspan="11">
                                                                    <form accept-charset="UTF-8" action="/actualizar_direccion" data-remote="true" method="post"><div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                                                    <input id="patient_id" name="patient_id" type="hidden" value="93062">
                                                                    <input class="form-control" id="direction" name="direction" type="text" value="SANTA ROSA DE SAN JOAQUIN VIEJO -ICA">
                                                        </form>     </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr style="font-size:15px">
                                                                <td><strong>Convenio</strong></td>
                                                                <td colspan="5"><input class="form-control" id="" name="" type="text"></td>
                                                                <td><strong>Particular</strong></td>
                                                                <td><input class="form-control" id="" name="" type="text" value="X"></td>
                                                                
                                                                <td colspan="3"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr style="font-size:15px">
                                                                <td><strong>Otros(Especificar)</strong></td>
                                                                <td colspan="12">
                                                                    <form accept-charset="UTF-8" action="/actualizar_otros" data-remote="true" method="post" role="form"><div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                                                        <input id="patient_id" name="patient_id" type="hidden" value="93062">
                                                                        <textarea class="form-control" cols="20" id="other" name="other" rows="2"></textarea> 
                                                        </form>     </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr style="font-size:15px">
                                                                <td colspan="12">
                                                                    @if(str_replace(" años","",Helpers::get_age($patient->birthday)) < 18)
                                                                    <p>
                                                                        De conformidad a lo establecido en la Ley 29733, Ley de Protección de Datos Personales, yo CARBAJO QUIJANDRIA ROSA AZUCENA, con DNI° 70258872, Autorizo a la Clínica Señor de Luren de Ica S.A.C, al registro, tratamiento y transferencia de los datos recogidos de mi menor hijo durante los procesos de atención de salud. Los cuales pasará a formar parte del banco de datos personas – Historia Clínica – bajo la responsabilidad de la Clínica Señor de Luren de Ica S.A.C, los que registran con la finalidad de recolectar información necesaria para la correcta atención y control de salud. Conozco que puedo ejercer, de acuerdo a la legislación vigente, los derechos de información, acceso, actualización, inclusión, rectificación y oposición sobre sus datos personales, enviando una comunicación escrita al departamento de Administración de la Clínica Señor de Luren de Ica S.A.C
                                                                    </p>
                                                                    @else
                                                                    <p>
                                                                        De conformidad a lo establecido en la Ley 29733, Ley de Protección de Datos Personales, yo CARBAJO QUIJANDRIA ROSA AZUCENA, con DNI° 70258872, Autorizo a la Clínica Señor de Luren de Ica S.A.C, al registro, tratamiento y transferencia de los datos recogidos de mi persona durante los procesos de atención de salud. Los cuales pasará a formar parte del banco de datos personas – Historia Clínica – bajo la responsabilidad de la Clínica Señor de Luren de Ica S.A.C, los que registran con la finalidad de recolectar información necesaria para la correcta atención y control de salud. Conozco que puedo ejercer, de acuerdo a la legislación vigente, los derechos de información, acceso, actualización, inclusión, rectificación y oposición sobre sus datos personales, enviando una comunicación escrita al departamento de Administración de la Clínica Señor de Luren de Ica S.A.C
                                                                    </p>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="12">&nbsp;</td>
                                                            </tr>
                                                            <tr style="font-size:15px">
                                                                <td>
                                                                <div class="impre">
                                                                    <form accept-charset="UTF-8" action="/actualizar_fecha_generacion" data-remote="true" method="post" role="form"><div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                                                        <input id="patient_id" name="patient_id" type="hidden" value="93062">
                                                                        <input class="form-control" id="date_generation" name="date_generation" type="date" value="">
                                                                        <input name="commit" type="submit" value="Enviar">
                                                        </form>     </div>      
                                                                </td>
                                                                <td colspan="4"></td>
                                                                <td align="right" colspan="7">
                                                                    <div id="date_generation_text">
                                                                        Ica, Martes, 03 de Julio del 2018
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4"><img alt="Horizontal" height="15" src="/assets/images/horizontal.jpg" width="400"></td>
                                                                <td colspan="8"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" align="center">(70258872)</td>
                                                                <td colspan="8"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4" align="center">CARBAJO QUIJANDRIA ROSA AZUCENA</td>
                                                                <td colspan="8"></td>
                                                            </tr>
                                                            
                                                        </tbody></table>
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
                                                        <a href="#" class="btn btn-success waves-effect waves-light tooltips modal" data-toggle="tooltip" data-target="#edit-patient" data-toggle="tooltip" data-placement="top" title=""  data-original-title="Editar Paciente">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-success waves-effect waves-light tooltips modal" data-toggle="tooltip" data-target="#print-hc" data-original-title="Autorización Historia Clínica">
                                                            <i class="md md-assignment"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-success waves-effect waves-light tooltips modal" data-toggle="tooltip" data-target="#print-hc-n" data-original-title="Anexo Historia Clínica">
                                                            <i class="md md-description"></i>
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
                                                                                            <span class="text-muted">{{ Helpers::get_age($patient->birthday) }} ( {{ $patient->birthday }} )</span>
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
                                            <h3><a href="{{ url('/atencion/'.$auth->id) }}" data="address">{{ $auth->code }}</a></h3>
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
                $(".modal").click(function(){
                    $($(this).data('target')).modal('show');
                });
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