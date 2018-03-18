
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
                                                                <th>Acciones</th>
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
                                                                                    <td>{{ $p->emission_date or '' }}</td>
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
                                                                                    <td>{{ $p->authorization->code or '' }}</td>
                                                                                    <td>{{ $p->authorization->patient->name or '' }} {{ $p->authorization->patient->paternal or '' }} {{ $p->authorization->patient->maternal or '' }}</td>
                                                                                    <td><a href="{{ url('/pay_edocument/view/'.$p->pay_document_type->id.'/'.$p->id.'/print.pdf') }}">{{ $p->serie }}-{{ Helpers::number_format_cond($p->code,7)}}</a></td>
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
                                    <div class="col-sm-12">
                                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-editable_paginate">
                                             <?php echo $paginate;?>
                                        </div>
                                    </div>
                                </div>