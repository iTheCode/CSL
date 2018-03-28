
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Lista de Medicos (
                                                        Total {{ $users->total() }} )
                                        <div class="col-md-4 pull-right" style="margin-right: 20px">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="Ingrese nombre de la persona">
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
                                                                <th>DNI</th>
                                                                <th>Nombres Completos</th>
                                                                <th>Especialidad</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ $user->tuition_code}} </td>
                                                                <td>{{ $user->document_identity_code }}</td>
                                                                <td>{{ $user->complet_name }}</td>
                                                                <td>{{ $user->speciality->name or ''}}</td>
                                                                <td>
                                                                  <a href="#" type="button" class="btn btn-icon waves-effect waves-light {{Helpers::get_color(@$user->coverage->sub_coverage_type->coverage_type->id)}} m-b-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar personal" data="address" onclick="open_modal('edit')"> <button>Editar</button></a>
                                                                  <a href="#" type="button" class="btn btn-icon waves-effect waves-light {{Helpers::get_color(@$user->coverage->sub_coverage_type->coverage_type->id)}} m-b-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar personal" data="address"> <button>Eliminar</button></a>
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
