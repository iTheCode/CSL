
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="/assets/images/users/profile.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ $user }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <!--<li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Perfil<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Configuración</a></li>-->
                                    <li><a href="/logout"><i class="md md-settings-power"></i> Salir</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">{{ $position }}</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="/dashboard" class="waves-effect" data="address"><i class="md md-home"></i><span> Principal </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-public"></i><span> Admision </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admision/atenciones" data="address">Atenciones Médicas</a></li>
                                    <li><a href="/admision/citas" data="address">Citas</a></li>
                                    <li><a href="/admision/horario" data="address">Horario Médico</a></li>
                                    <li><a href="/admision/reporte" data="address">Reportes</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="waves-effect"><i class="md md-payment"></i> <span> Caja </span><span class="pull-right"><i class="md md-add"></i> </a>
                                <ul class="list-unstyled">
                                    <li><a href="/caja/atenciones" data="address">Atenciones</a></li>
                                    <li><a href="/caja/reporte" data="address">Reportes</a></li>
                                </ul>
                              
                            </li>

                            <li>
                                <a href="/triaje/atenciones" class="waves-effect" data="address"><i class="fa fa-stethoscope"></i> <span> Triaje </span> </a>
                            </li>
                            <li>
                                <a href="/pacientes/general" class="waves-effect" data="address"><i class="md md-perm-identity"></i><span> Pacientes </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ion-medkit"></i><span> Farmacia </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/farmacia/atenciones" data="address">Atenciones Médicas</a></li>
                                    <li><a href="/farmacia/liquidaciones" data="address">Liquidaciones</a></li>
                                    <li><a href="/farmacia/almacen" data="address">Almacén</a></li>
                                    <li><a href="/farmacia/reportes" data="address">Reportes</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="/hospitalizacion/habitaciones" class="waves-effect" data="address"><i class="md md-local-hotel"></i><span> Hospitalización </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user-md"></i><span> Consulta Externa </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                <?php $all = App\Models\Speciality::all() ;?>
                                @foreach($all as $spec)
                                    @if($spec->name != "")
                                    <li><a href="/consulta_externa/'.$spec->name.'/'.$spec->id) }}" data="address">{{ $spec->name }}</a></li>
                                    @endif
                                @endforeach
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-ambulance"></i><span> Emergencia </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Liquidaciones</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-local-atm"></i> <span> Facturación </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/facturacion/sunat" data="address">Documentos Emitidos</a></li>
                                    <li><a href="/facturacion/tramas" data="address">Tramas</a></li>
                                    <li><a href="/facturacion/proveedores" data="address">Proveedores</a></li>
                                    <li><a href="/facturacion/contabilidad" data="address">Contabilidad</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-laptop-mac"></i><span> Administración </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/administracion/horario" data="address">Horario Medico</a></li>
                                    <li><a href="/administracion/usuarios" data="address">Usuarios</a></li>
                                    <li><a href="/administracion/personal" data="address">Personal</a></li>
                                    <li><a href="/administracion/servicios" data="address">Servicios</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
