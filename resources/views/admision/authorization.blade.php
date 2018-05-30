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

        <link href="/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <style type="text/css" media="screen">
            .js .inputfile {
                width: 0.1px;
                height: 0.1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }

            .inputfile + label {
                width: 100%;
                font-size: 1.25rem;
                /* 20px */
                font-weight: 700;
                text-overflow: ellipsis;
                white-space: nowrap;
                cursor: pointer;
                display: inline-block;
                overflow: hidden;
                padding: 0.625rem 1.25rem;
                /* 10px 20px */
            }

            .no-js .inputfile + label {
                display: none;
            }

            .inputfile:focus + label,
            .inputfile.has-focus + label {
                outline: 1px dotted #000;
                outline: -webkit-focus-ring-color auto 5px;
            }

            .inputfile + label * {
                /* pointer-events: none; */
                /* in case of FastClick lib use */
            }

            .inputfile + label svg {
                width: 1em;
                height: 1em;
                vertical-align: middle;
                fill: currentColor;
                margin-top: -0.25em;
                /* 4px */
                margin-right: 0.25em;
                /* 4px */
            }

            .inputfile-2 + label {
                color: #00b19d;
                border: 2px solid currentColor;
            }

            .inputfile-2:focus + label,
            .inputfile-2.has-focus + label,
            .inputfile-2 + label:hover {
                color: #036b5f;
            }

        </style>
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
                <div class="wraper container-fluid" >
                    
                <!--<div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('/assets/images/big/bg.jpg'); background-size: 100% 100%">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="/assets/images/users/avatar-1.png" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white">{{ $client->patient->name or '' }} {{ $client->patient->paternal or '' }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                -->
                    <div class="row user-tabs hidden-xs" style="margin-right: -20px;">
                        <div class="col-sm-9 col-lg-6">
                            <ul class="nav nav-tabs tabs tabs-top" style="width: 100%;">
                            <li class="tab active" style="width: 20%;">
                                <a href="#details" data-toggle="tab" aria-expanded="true" class="active"> 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">Principal</span> 
                                </a>
                            </li> 
                            <li class="tab" style="width: 20%;"> 
                                <a href="#services" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                    <span class="hidden-xs">Servicios</span> 
                                </a> 
                            </li> 

                            @if(isset($client->insuredpharmacies))
                            <li class="tab" style="width: 20%;"> 
                                <a href="#pharmacy" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                    <span class="hidden-xs">Farmacia</span> 
                                </a> 
                            </li> 
                            @endif
                            <li class="tab" style="width: 20%;"> 
                                <a href="#documents" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                    <span class="hidden-xs">Adjuntos</span> 
                                </a> 
                            </li>
                            <li class="tab" style="width: 20%;"> 
                                <a href="#payments" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                    <span class="hidden-xs">Facturación</span> 
                                </a> 
                            </li> 
                        </ul> 
                        </div>
                        <div class="hidden-xs col-sm-3 col-lg-6">
                            <div class="pull-right">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle btn-rounded btn btn-primary waves-effect waves-light" href="#"> Opciones <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Auditar</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Eliminar</a></li>
                                    </ul>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12"> 
                        
                        <div class="tab-content profile-tab-content"> 
                            <div class="tab-pane active" id="details"> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Información Personal</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="about-info-p">
                                                    <strong>Nombre Completo</strong>
                                                    <br>
                                                    <p class="text-muted"><a href="{{ url('/paciente/'.$client->patient->id) }}"><?=mb_convert_case($client->patient->name." ".$client->patient->paternal." ".$client->patient->maternal, MB_CASE_TITLE, "UTF-8");?></a> <img src="https://png.icons8.com/ios/1600/unverified-account.png" width="20px" height="20px"><img src="http://agarioskins.com/submitted/useruploads/verified.png" width="20px" height="20px"></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>DNI</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $client->patient->document_identity_code or Html::link('/paciente/'.$client->patient->id,'Corregir DNI') }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Sexo</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $client->patient->sex or Html::link('/paciente/'.$client->patient->id, 'Corregir Sexo')}}</p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Fecha de Nacimiento</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $client->patient->birthday or Html::link('/paciente/'.$client->patient->id,'Corregir Fecha') }} ( {{ Helpers::get_age($client->patient->birthday) }} )</p>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Aseguradora</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <ul>
                                                    <li>{{ $client->insureds->insurance->name or 'Particular' }} </li>
                                                </ul>
                                            </div> 
                                        </div>

                                    </div>


                                    <div class="col-md-8">
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Información de la Atención</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                        <form id="atencion" role="form">
                                            <div class="form-group">
                                                <label for="FullName">Fecha de la Prestación</label>
                                                <input name="id" type="text" value="{{ $client->id }}" style="display: none;">
                                                <h5>{{ $client->date or ''}}</h5>
                                            </div>
                                            <div class="form-group">
                                                <label for="sub_coverage_type_id">Tipo de Cobertura</label>
                                                @if($client->coverage->sub_coverage_type)
                                                    {{ Form::select('sub_coverage_type_id',[null=>'Seleccione la cobertura'] + $sub_coverage_types, $client->coverage->sub_coverage_type->id, ['class' => 'form-control select2']) }}
                                                @else
                                                    {{ Form::select('sub_coverage_type_id',[null=>'Seleccione la cobertura'] + $sub_coverage_types, null, ['class' => 'form-control select2']) }}
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="status_id">Estado de la Prestación</label>
                                                {{ Form::select('status_id', [null=>'Seleccione estado'] + $statuses, $client->status_id, ['class' => 'form-control select2']) }}
                                            </div>
                                            <div class="form-group">
                                                <label for="doctor_id">Médico encargado</label>
                                                {{ Form::select('doctor_id', [null=>'Seleccione un doctor'] + $doctors, $client->doctor_id, ['class' => 'form-control select2']) }}
                                            </div>
                                            <div class="form-group">
                                                
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="cop_fijo">Copago Fijo</label>
                                                    <input name="cop_fijo" type="text" value="{{ $client->coverage->cop_fijo or '' }}" class="form-control">
                                                    </div>
                                            </div>

                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="cop_var">Copago Variable</label>
                                                   <div class="input-group bootstrap-touchspin"><input name="cop_var" type="text" value="{{ $client->coverage->cop_var or '' }}"  data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix">%</span></div>
                                                   </div>
                                            </div>
                                            <div class="form-group">
                                                        <label for="first_diagnostic">Primer Diagnóstico</label>
                                                        {{ Form::select('first_diagnostic', [null=>'Seleccione un diagnóstico'] + $diagnostic_types, $client->first_diagnostic, ['class' => 'form-control select2']) }}
                                                    
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                        <label for="second_diagnostic">Segundo Diagnóstico</label>
                                                        {{ Form::select('second_diagnostic', [null=>'Seleccione un diagnóstico'] + $diagnostic_types, $client->second_diagnostic, ['class' => 'form-control select2']) }}
                                            </div>

                                            <div class="form-group">
                                                        <label for="third_diagnostic">Tercer Diagnóstico</label>
                                                        {{ Form::select('third_diagnostic', [null=>'Seleccione un diagnóstico'] + $diagnostic_types, $client->third_diagnostic, ['class' => 'form-control select2']) }}
                                            </div>
                                            <div class="form-group">
                                                <label for="consultations_quantity">Cantidad de Consultas</label>
                                                <input name="consultations_quantity" type="text" class="form-control" value="{{ $client->consultations_quantity or '' }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="symptoms">Síntomas</label>
                                                <textarea style="height: 125px" name="symptons" class="form-control">{{ $client->symptoms or '' }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="ruc_transference">Ruc de IPRESS de Transferencia</label>
                                                <input name="ruc_transference" type="text" class="form-control" value="{{ $client->ruc_transference or '' }}">
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label for="date_transference">Fecha de Transferencia</label>
                                                    <input name="date_transference" type="text" class="form-control" placeholder="mm/dd/yyyy" value="{{ $client->date_transference or '' }}" id="date_transference">
                                                </div>
                                                <div class="col-md-6">
                                                <label for="time_transference">Hora de Transferencia</label>
                                                <div class="bootstrap-timepicker"><input id="time_transference" name="time_transference" type="text" class="form-control" value="{{ $client->time_transference or '00:00' }}"></div>
                                                </div>
                                            </div><br><br><br><br><br>
                                            <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Guardar Cambios</button>
                                        </form>

                                            </div> 
                                        </div> 

                                        <!--<div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Progreso de Atención</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="m-b-0">
                                                    <h5>Atención <span class="pull-right">95%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                            <span class="sr-only">95% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> 
                                        </div>
                                        -->

                                    </div>

                                </div>
                            </div> 




                            <div class="tab-pane" id="services">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Servicios Prestados</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Código</th>
                                                                        <th>Descripción</th>
                                                                        <th>Fecha de Prestación</th>
                                                                        <th>Area Clínica</th>
                                                                        <th>Atención</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1;?>
                                                                    @if(isset($client->insuredservices))
                                                                        @foreach($client->insuredservices as $is)
                                                                            @if($is->is_consultation != 1)
                                                                                @foreach ($is->purchaseinsuredservices as $in)
                                                                                <tr>
                                                                                    <td>{{ $i++ }}</td>
                                                                                    <td>{{ $in->service->code or '' }}</td>
                                                                                    <td class="col-md-5">{{ $in->service->name or '' }} (S)</td>
                                                                                    <td>{{ $in->created_at or ''}}</td>
                                                                                    <td>{{ $in->service->clinicarea->name or ''}}</td>
                                                                                    <td>{{ $is->employee->username or 'Sin asignar'}}</td>
                                                                                </tr>
                                                                                @endforeach
                                                                            @else
                                                                                @foreach ($is->purchasecoverageservices as $in)
                                                                                <tr>
                                                                                    <td>{{ $i++ }}</td>
                                                                                    <td>{{ $in->service->code or '' }}</td>
                                                                                    <td class="col-md-5">{{ $in->service->name or '' }} (S)</td>
                                                                                    <td>{{ $in->created_at or ''}}</td>
                                                                                    <td>{{ 'Cobertura'}}</td>
                                                                                    <td>{{ $is->employee->username or 'Sin asignar'}}</td>
                                                                                </tr>
                                                                                @endforeach
                                                                            @endif
                                                                         @endforeach
                                                                    @endif

                                                                    @if(isset($client->particularservices))
                                                                        @foreach($client->particularservices as $ps)
                                                                            @foreach ($ps->purchaseparticularservices as $in)
                                                                                <tr>
                                                                                    <td>{{ $i++ }}</td>
                                                                                    <td>{{ $in->service->code or '' }}</td>
                                                                                    <td class="col-md-5">{{ $in->service->name or '' }} (P)</td>
                                                                                    <td>{{ $in->created_at or '' }}</td>
                                                                                    <td>{{ $in->service->clinicarea->name or ''}}</td>
                                                                                    <td>{{ $ps->employee->username or 'Sin asignar'}}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @endforeach
                                                                    @endif

                                                                    @if(isset($client->insuredpharmacies))
                                                                        @foreach ($client->insuredpharmacies as $ip)
                                                                                <tr>
                                                                                    <td>{{ $i++ }}</td>
                                                                                    <td>{{ $ip->ticket_code or '' }}</td>
                                                                                    <td class="col-md-5">Venta de Farmacia N°{{ $ip->liquidation or '' }} (F)</td>
                                                                                    <td>{{ $ip->created_at or '' }}</td>
                                                                                    <td>Farmacia</td>
                                                                                    <td>{{ $ip->employee->username or 'Sin asignar'}}</td>
                                                                                </tr>
                                                                        @endforeach
                                                                    @endif
                                                                </tbody>
                                                            </table>
                                                        </div>

                                    </div> 
                                </div>
                                <!-- Personal-Information -->
                            </div> 

                            @if(isset($client->insuredpharmacies))
                            <div class="tab-pane" id="pharmacy">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Medicamentos de Farmacia</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Liquidación</th>
                                                                        <th>Código</th>
                                                                        <th>Descripción</th>
                                                                        <th>Fecha de Venta</th>
                                                                        <th>Atención</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1;?>
                                                                        @foreach ($client->insuredpharmacies as $ip)
                                                                            @foreach ($ip->purchaseinsuredpharmacies as $in)
                                                                                <tr>
                                                                                    <td>{{ $i++ }}</td>
                                                                                    <td>{{ $ip->liquidation or '' }} </td>
                                                                                    @if(isset($in->digemid_product))
                                                                                    <td>{{ $in->digemid_product->code or '' }}</td>
                                                                                    <td class="col-md-5">{{ $in->digemid_product->name or '' }} {{ $in->digemid_product->concentration or '' }}</td>
                                                                                    @elseif(isset($in->cum_sunasa_product))
                                                                                    <td>{{ $in->cum_sunasa_product->code or '' }}</td>
                                                                                    <td class="col-md-5">{{ $in->cum_sunasa_product->name or '' }} {{ $in->cum_sunasa_product->form or '' }}</td>
                                                                                    @elseif(isset($in->ean_product))
                                                                                    <td>{{ $in->ean_product->code or '' }}</td>
                                                                                    <td class="col-md-5">{{ $in->ean_product->name or '' }} {{ $in->ean_product->concentration or '' }} {{ $in->ean_product->form_simplificated or '' }}</td>
                                                                                    @elseif(isset($in->material_product))
                                                                                    <td>{{ $in->material_product->code or '' }}</td>
                                                                                    <td class="col-md-5">{{ $in->material_product->name or '' }} {{ $in->material_product->concentration or '' }} {{ $in->material_product->form_simplificated or '' }}</td>
                                                                                    @elseif(isset($in->sismed_product))
                                                                                    <td>{{ $in->sismed_product->code or '' }}</td>
                                                                                    <td class="col-md-5">{{ $in->sismed_product->name or '' }} {{ $in->material_product->unity or '' }} {{ $in->sismed_product->presentation or '' }}</td>
                                                                                    @else
                                                                                    <td>000</td>
                                                                                    <td class="col-md-5">{{ $in->name or '' }}</td>
                                                                                    @endif
                                                                                    <td>{{ $ip->created_at or '' }}</td>
                                                                                    <td>{{ $ip->employee->username or 'Sin asignar'}}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>

                                    </div> 
                                </div>
                                <!-- Personal-Information -->
                            </div> 
                            @endif

                            <div class="tab-pane" id="payments">
                                <button type="button" class="float btn waves-effect waves-light btn-success " data-toggle="modal" style="margin-right:5px;margin-top: 5px;">+</button>
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Documentos de Pago</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Documento</th>
                                                                        <th>Tipo de Documento</th>
                                                                        <th>Fecha de Emisión</th>
                                                                        <th>Fecha de Envio</th>
                                                                        <th>Estado</th>
                                                                        <th>Usuario</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i = 1;?>
                                                                    @if(isset($client->pay_documents))
                                                                        @foreach ($client->pay_documents as $p)
                                                                            <tr>
                                                                                <td>{{ $i++ }}</td>
                                                                                <td><a href="{{ url('/pay_edocument/charge_document/'.$p->pay_document_type->id.'/'.$p->id) }}">{{ $p->code or '' }}</a></td>
                                                                                <td>{{ $p->pay_document_type->name or '' }}</td>
                                                                                <td>{{ $p->created_at or '' }}</td>
                                                                                <td>{{ $p->emission_date or '' }}</td>
                                                                                <td><span class="label label-success">{{ Helpers::sunat_status($p->sunat_status) }}</span></td>
                                                                                <td>{{ $p->employee->username or 'Sin asignar'}}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @endif
                                                                    @if(isset($client->pay_edocuments))
                                                                        @foreach ($client->pay_edocuments as $p)
                                                                            <tr>
                                                                                <td>{{ $i++ }}</td>
                                                                                <td><a href="{{ url('/pay_edocument/'.$p->pay_document_type->id.'/'.$p->id) }}">{{ $p->serie }}-{{ $p->code or '' }}</a></td>
                                                                                <td>{{ $p->pay_document_type->name or '' }}</td>
                                                                                <td>{{ $p->created_at or '' }}</td>
                                                                                <td>{{ $p->emission_date or '' }}</td>
                                                                                <td><span class="label label-success">{{ Helpers::sunat_status($p->sunat_status) }}</span></td>
                                                                                <td>{{ $p->employee->username or 'Sin asignar'}}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @endif
                                                                </tbody>
                                                            </table>
                                                        </div>

                                    </div> 
                                </div>
                                <!-- Personal-Information -->
                            </div> 


                            <div class="tab-pane" id="documents">
                                <!-- Personal-Information -->
                                <div class="row">
                            <div class="col-sm-12"> 
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                                 <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Tipo de Documento :</label>
                                                    <div class="col-lg-10">
                                                        {{ Form::select('document_type_id', [null=>'Seleccione un Tipo de Documento'] + $document_types, null, ['class' => 'form-control']) }}
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Motivo :</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="username" name="username" type="text">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Área :</label>
                                                    <div class="col-lg-10">
                                                        {{ Form::select('area_id', [null=>'Seleccione un Área'] + $areas, null, ['class' => 'form-control']) }}
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="control-label col-lg-2">Archivo :</label>
                                                    <div class="col-lg-10">
                                                      <input type="file" name="file" id="file" class="inputfile inputfile-2" data-multiple-caption="{count} archivo(s) seleccionado(s)" multiple="">
                                                      <label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span> Elige un archivo…</span></label>
                                                    </div>
                                                    
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                                            <button type="button" class="btn waves-effect waves-light btn-success">SUBIR</button>

                                        </div>

                                    </div>
                                  </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default" style="display: none;">

                                </div>
                            </div>
                        </div> <!-- End row -->
                                <button type="button" class=" float btn waves-effect waves-light btn-success " data-toggle="modal" style="margin-right:5px;margin-top: 5px;" data-target="#exampleModalCenter">
                                        +
                                        </button>
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading "> 
                                        <h3 class="panel-title">Documentos Anexados</h3>
                                        
                                        
                                        
                                    
                                    </div> 

                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                            
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Tipo de Documento</th>
                                                                        <th>Motivo</th>
                                                                        <th>Fecha de Subida</th>
                                                                        <th>Área</th>
                                                                        <th>Asignado</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!--<tr>
                                                                        <td>1</td>
                                                                        <td>Carta de Garantia</td>
                                                                        <td>Prueba de Documento</td>
                                                                        <td>29/05/2017</td>
                                                                        <td><span class="label label-info">Hospitalizacion</span></td>
                                                                        <td>sis_fabian</td>
                                                                    </tr>-->
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>

                                    </div> 
                                </div>
                                <!-- Personal-Information -->
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
        
        <script src="/assets/plugins/select2/dist/js/select2.min.js" type="text/javascript" load="force"></script>
        <!--Morris Chart-->
        <script src="/assets/plugins/raphael/raphael-min.js"></script>
        <script src="/assets/plugins/morris.js/morris.min.js"></script>
        
        <!-- jQuery  -->

        <script src="/assets/plugins/timepicker/bootstrap-timepicker.min.js" load="force"></script>
        <script" src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" load="force"></script>
        <script src="/assets/pages/jquery.dashboard.js"></script>
        
        <script src="/assets/js/modernizr.min.js"></script>
        <script type="text/javascript" load="force">

            $('select.select2').select2();
            jQuery(document).ready(function($) {
                $('#time_transference').timepicker({showMeridian: false});
                $('#date_transference').datepicker();
                $(".wraper").fadeIn();
                $(".indicator").attr("style","right: 442px; left: 0px;");
                $("#atencion").submit(function(){
                      $.ajax({
                            url:"{{ url('/saveAtencion/') }}/",
                            method: "GET",
                            async:false,
                            data: $(this).serialize(),
                            success: function(result){
                                location.reload();
                            }
                        });
                      return false;
                });
            });
            var inputs = document.querySelectorAll( '.inputfile' );
            Array.prototype.forEach.call( inputs, function( input )
            {
                var label    = input.nextElementSibling,
                    labelVal = label.innerHTML;

                input.addEventListener( 'change', function( e )
                {
                    var fileName = '';
                    if( this.files && this.files.length > 1 )
                        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                    else
                        fileName = e.target.value.split( '\\' ).pop();

                    if( fileName )
                        label.querySelector( 'span' ).innerHTML = fileName;
                    else
                        label.innerHTML = labelVal;
                });
            });
        </script>

    
    </body>
</html>