
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Lista de Productos ( 
                                                        Total {{ $users->total() }} )
                                        <div class="col-md-4 pull-right" style="margin-right: 20px">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="Ingrese el nombre del producto">
                                                        <button onclick="load_data(null,$(this).prev())" type="button" class="btn waves-effect waves-light btn-success"><i class="fa fa-search"></i></button></span>
                                                    </div>
                                        </div></h3>
                                    </div>
                                    <hr>
                                    <div style="float:none;">
                                                        <?php $i = (20*($currentPage-1))+1;?>
                                                        @foreach ($users as $product)

							                            <div class="col-sm-6 col-lg-3">
							                                <div class="mini-stat clearfix bx-shadow bg-white">
							                                    <a href="/test" class="text-white " ><span class="mini-stat-icon bg-info waves-effect"><i class="fa  fa-plus-square"></i></span></a>
							                                    <div class="mini-stat-info text-right text-dark">
							                                        <span class="name text-dark">{{ $product->name }}</span>
							                                        {{ $product->concentration }} {{ $product->presentation }}
							                                    </div>
							                                    <br>
							                                    <hr class="m-t-10">
							                                    <ul class="text-center social-links list-inline m-0">
							                                        <div class="text-left">                                      <i class="fa fa-heartbeat fa-2x text-info"></i><span class="pull-right text-muted">Stock</span>
							                                        </div>
							                                        <div class="text-left">                                      <i class="fa fa-user-md fa-2x text-info"></i><span class="pull-right text-muted">Estado</span>
							                                        </div>
							                                    </ul>
							                                </div>
							                            </div>
                                                        @endforeach
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-editable_paginate">
                                             <?php echo $paginate;?>
                                        </div>
                                    </div>
                                </div>