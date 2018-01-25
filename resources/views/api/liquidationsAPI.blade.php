
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Lista de Liquidaciones ( 
                                                        Total {{ $users->total() }} )
                                        <div class="col-md-4 pull-right" style="margin-right: 20px">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        @if($data == "null")
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="Ingrese el número de liquidación">
                                                        @else
                                                        <input type="text" id="search" name="search" class="form-control" value="{{ $data }}" placeholder="Ingrese el número de liquidación">
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
                                                                <th>Código</th>
                                                                <th>Nº Liq</th>
                                                                <th>Paciente</th>
                                                                <th>Aseguradora</th>
                                                                <th>Fecha de Atención</th>
                                                                <th>Monto</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @foreach ($users as $liquidation)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td><a href="{{ url('/atencion/'.$liquidation->authorization->id) }}">{{ $liquidation->authorization->code}}</a></td>
                                                                <td><a href="{{ url('/farmacia/liquidacion/'.$liquidation->id) }}">{{ $liquidation->liquidation }}</a></td>
                                                                <td><a href="{{ url('/paciente/'.$liquidation->authorization->patient->id) }}">{{ $liquidation->authorization->patient->name}} {{ $liquidation->authorization->patient->paternal }} {{ $liquidation->authorization->patient->maternal }}</a></td>
                                                                <td>{{ $liquidation->authorization->insureds->insurance->name or 'Particular'}}</td>
                                                                <td>{{ $liquidation->date_create}}</td>
                                                                <td>{{ $liquidation->initial_amount }}</td>
                                                                
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