
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Lista de Atenciones ( 
                                                        Total {{ $pay_documents->total() }} )
                                        <div class="col-md-4 pull-right" style="margin-right: 20px">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        @if($data == "null")
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="Ingrese su búsqueda">
                                                        @else
                                                        <input type="text" id="search" name="search" class="form-control" value="{{ $data }}" placeholder="Ingrese su búsqueda">
                                                        @endif
                                                        <button onclick="load_data(null,$(this).prev())" type="button" class="btn waves-effect waves-light btn-success"><i class="fa fa-search"></i></button></span>
                                                    </div>
                                        </div></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Autorización</th>
                                                                <th>Paciente</th>
                                                                <th>Documento</th>
                                                                <th>Tipo de Documento</th>
                                                                <th>Fecha de Emisión</th>
                                                                <th>Estado</th>
                                                                <th>Usuario</th>
                                                                @can('credit note boletas')
                                                                    <th>Acciones</th>
                                                                @endcan
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @if($from == "facturacion")
                                                            @foreach ($pay_documents as $p)

                                                                                <tr>
                                                                                    <td>{{ $i++ }}</td>
                                                                                    <td>{{ $p->authorization->code or '' }}</td>
                                                                                    <td>{{ $p->authorization->patient->name or '' }} {{ $p->authorization->patient->paternal or '' }} {{ $p->authorization->patient->maternal or '' }}</td>
                                                                                    <td><a href="{{ url('/pay_edocument/charge_document/'.$p->pay_document_type->id.'/'.$p->id) }}">{{ $p->code or '' }}</a></td>
                                                                                    <td>{{ $p->created_at or '' }}</td>
                                                                                    <td>{{ $p->pay_document_type->name or '' }}</td>
                                                                                    <td><span class="label label-success">{{ Helpers::sunat_status($p->sunat_status) }}</span></td>
                                                                                    <td>{{ $p->employee->username or 'Sin asignar'}}</td>
                                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        @if($from == "caja")
                                                            @foreach ($pay_documents as $p)
                                                                                <tr>
                                                                                    <td>{{ $i++ }}</td>
                                                                                    @if($p->authorization->id == 105098)
                                                                                        <td>Particular</td>
                                                                                        @if($p->numDocUsuario == 0)
                                                                                            <td>Sin Documento</td>
                                                                                        @else
                                                                                            <td>{{ $p->rznSocialUsuario or 'Sin Documento'}}</td>
                                                                                        @endif
                                                                                    @else
                                                                                        <td>{{ $p->authorization->code or '' }}</td>
                                                                                        <td>{{ $p->authorization->patient->name or '' }} {{ $p->authorization->patient->paternal or '' }} {{ $p->authorization->patient->maternal or '' }}</td> 
                                                                                    @endif
                                                                                    <td><a href="{{ url('/pay_edocument/view/'.$p->view_print.'/'.$p->id.'/print.pdf') }}" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver Documento">{{ $p->serie }}-{{ Helpers::number_format_cond($p->code,7)}}</a></td>
                                                                                    <td>{{ $p->pay_document_type->name or '' }}</td>
                                                                                    <td>{{ $p->emission_date or '' }}</td>
                                                                                    <td><span class="label label-success">{{ Helpers::sunat_status($p->sunat_status) }}</span></td>
                                                                                    <td>{{ $p->employee->username or 'Sin asignar'}}</td>
                                                                                    @can('credit note boletas')
                                                                                        <?php if( (str_replace('días','',Helpers::days_ago($p->emission_date)) < 7 && $p->pay_document_type->code == "03" ) or ($p->pay_document_type->code == "01")){ ?>
                                                                                        <td><a href="{{ url('/caja/e_notes/'.$p->id.'/07') }}" type="button" class="btn btn-icon waves-effect waves-light {{Helpers::get_color(@$p->authorization->coverage->sub_coverage_type->coverage_type->id)}} m-b-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nota de Crédito" data="address"> <i class="md md-block"></i></a></td>

                                                                                        <?php } ?>
                                                                                    @endcan
                                                                                    @role('sistemas')
                                                                                        <td><a href="{{ url('/pay_edocument/re_send/'.$p->id.'') }}" type="button" class="btn btn-icon waves-effect waves-light {{Helpers::get_color(@$p->authorization->coverage->sub_coverage_type->coverage_type->id)}} m-b-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Re Generar" target="_blank"> <i class="md md-cached"></i></a></td>
                                                                                    @endrole
                                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-sm-12">
                                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-editable_paginate">
                                             <?php echo $paginate;?>
                                        </div>
                                    </div>
                                </div>