
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Lista de Usuarios ( 
                                                        Total {{ $users->total() }} )
                                        <div class="col-md-4 pull-right" style="margin-right: 20px">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="Ingrese nombre del usuario">
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
                                                                <th>Nombres Completos</th>
                                                                <th>Usuario</th>
                                                                <th>Área</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ $user->name }} {{ $user->paternal }} {{ $user->maternal }}</td>
                                                                <td>{{ $user->username }}</td>
                                                                <td>{{ $user->area->name or ''}}</td>
                                                                <td>
                                                                <a href="{{ url('/administracion/usuarios/edit'.$user->id) }}" type="button" class="btn btn-icon waves-effect waves-light {{Helpers::get_color(@$user->coverage->sub_coverage_type->coverage_type->id)}} m-b-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar usuario" data="address" onclick="open_modal('edit')"> <button>Editar</button></a>

                                                                <a href="{{ url('/administracion/usuarios/delete'.$user->id) }}" type="button" class="btn btn-icon waves-effect waves-light {{Helpers::get_color(@$user->coverage->sub_coverage_type->coverage_type->id)}} m-b-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar usuario" data="address"> <button>Eliminar</button></a>     
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