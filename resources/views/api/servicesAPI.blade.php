
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Lista de Servicios ( 
                                                        Total {{ $users->total() }} )
                                        <div class="col-md-4 pull-right" style="margin-right: 20px">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="Ingrese nombre del servicio">
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
                                                                <th>Nombre</th>
                                                                <th>Área Clínica</th>
                                                                <th>Área Contable</th>
                                                                <th>Unitario</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ $user->code }}</td>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->clinicarea->name }}</td>
                                                                <td>{{ $user->contable_name }}</td>
                                                                <td>{{ $user->unitary}} </td>
                                                                <td></td>
                                                                
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