
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
                                                                <th>SITEDS Code</th>
                                                                <th>Nombres Completos</th>
                                                                <th>Usuario</th>
                                                                <th>Área</th>
                                                                @role('sistemas')
                                                                    <th>Acciones</th>
                                                                @else

                                                                @endrole
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ $user->siteds_code }}</td>
                                                                <td>{{ $user->name }} {{ $user->paternal }} {{ $user->maternal }}</td>
                                                                <td>{{ $user->username }}</td>
                                                                <td>{{ $user->area->name or ''}}</td>
                                                                <td>
                                                                @role('sistemas')
                                                                    <a href="#" type="button" class="btn btn-success btn-custom btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar Usuario" onclick="open_modal('edit_user')"><i class="md md-mode-edit"></i></a>
                                                                    <a href="#" type="button" class="btn btn-success btn-custom btn-icon waves-effect waves-light btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dar de baja"><i class="md  md-keyboard-arrow-down"></i></a>
                                                                    <a href="#" type="button" class="btn btn-success btn-custom btn-icon waves-effect waves-light btn-pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Activar Usuario"><i class="md  md-keyboard-arrow-up"></i></a>
                                                                @else
                                                                @endrole
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
