
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
                                                                <th>Código</th>
                                                                <th>Código Interno</th>
                                                                <th>Historia Clínica</th>
                                                                <th>DNI</th>
                                                                <th>Paciente</th>
                                                                <th>Médico</th>
                                                                <th>Aseguradora</th>
                                                                <th>Fecha de Atención</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ $user->code or 'XXXXXXXXXX'}}</td>
                                                                <td>{{ $user->intern_code or 'Corregir Código'}}</td>
                                                                <td>{{ $user->patient->clinic_history_code or 'Corregir Historia'}}</td>
                                                                <td>{{ $user->patient->document_identity_code or 'Corregir DNI' }}</td>
                                                                <td><a href="/paciente/{{ $user->patient->id or '' }}">{{ $user->patient->name or ''}} {{ $user->patient->paternal or '' }} {{ $user->patient->maternal or '' }}</a></td>
                                                                <td>{{ $user->doctor->complet_name or '' }}</td>
                                                                <td>{{ $user->insureds->insurance->name or 'Particular' }}</td>
                                                                <td>{{ $user->date or 'Corregir Fecha' }}</td>
                                                                <td>
                                                                    <div class="btn-group m-b-10">
                                                                    <a href="{{ url('/atencion/'.$user->id) }}" type="button" class="btn btn-icon waves-effect waves-light {{Helpers::get_color(@$user->coverage->sub_coverage_type->coverage_type->id)}} m-b-5 tooltips" data-toggle="tooltip" data-placement="top" title data-original-title="{{ $user->coverage->sub_coverage_type->coverage_type->name or 'INDEFINIDO' }} {{$user->employee->username or 'Sin asignar'}}"><i class="md md-launch"></i></a> 
                                                                </div>
                                                                </td>
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