
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Lista de Atenciones ( 
                                                        Total {{ $users->total() }} )
                                        <div class="col-md-4 pull-right" style="margin-right: 20px">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="Ingrese DNI o Nombres del Paciente">
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
                                                                <th>Fecha de Envio</th>
                                                                <th>Estado</th>
                                                                <th>Usuario</th>
                                                                <th>Acciones</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @foreach ($pay_documents as $p)

                                                                            <tr>
                                                                                <td>{{ $i++ }}</td>
                                                                                <td><a href="{{ url('/charge_document/'.$p->pay_document_type->id.'/'.$p->id) }}">{{ $p->code or '' }}</a></td>
                                                                                <td>{{ $p->pay_document_type->name or '' }}</td>
                                                                                <td>{{ $p->created_at or '' }}</td>
                                                                                <td>{{ $p->emission_date or '' }}</td>
                                                                                <td><span class="label label-success">{{ Helpers::sunat_status($p->sunat_status) }}</span></td>
                                                                                <td>{{ $p->employee->username or 'Sin asignar'}}</td>
                                                                            </tr>
                                                        @endforeach
                                                            
                                                        @foreach ($local_pay_documents as $p)

                                                                            <tr>
                                                                                <td>{{ $i++ }}</td>
                                                                                <td><a href="{{ url('/charge_document/'.$p->pay_document_type->id.'/'.$p->id) }}">{{ $p->code or '' }}</a></td>
                                                                                <td>{{ $p->pay_document_type->name or '' }}</td>
                                                                                <td>{{ $p->created_at or '' }}</td>
                                                                                <td>{{ $p->emission_date or '' }}</td>
                                                                                <td><span class="label label-success">{{ Helpers::sunat_status($p->sunat_status) }}</span></td>
                                                                                <td>{{ $p->employee->username or 'Sin asignar'}}</td>
                                                                            </tr>
                                                        @endforeach
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