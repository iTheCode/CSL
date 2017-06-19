
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
                                    <li><a href="{{ url('/logout') }}"><i class="md md-settings-power"></i> Salir</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">{{ $position }}</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="/" class="waves-effect"><i class="md md-home"></i><span> Principal </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="index.html" class="waves-effect"><i class="md md-public"></i><span> Admision </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/admision/atenciones') }}">Atenciones Médicas</a></li>
                                    <li><a href="{{ url('/admision/citas') }}">Citas</a></li>
                                    <li><a href="{{ url('/admision/horario') }}">Horario Médico</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-payment"></i> <span> Caja </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/caja/atenciones') }}">Atenciones Recientes</a></li>
                                    <!--<li><a href="{{ url('/exportar_caja') }}">Exportar Caja</a></li>-->
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-stethoscope"></i> <span> Triaje </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/triaje/atenciones') }}">Atenciones Recientes</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-perm-identity"></i><span> Pacientes </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/pacientes/general') }}">Lista de Pacientes</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ion-medkit"></i><span> Farmacia </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/farmacia/atenciones') }}">Atenciones</a></li>
                                    <li><a href="{{ url('/farmacia/liquidaciones') }}">Liquidaciones</a></li>
                                    <li><a href="{{ url('/farmacia/almacen') }}">Almacén</a></li>
                                    <li><a href="{{ url('/farmacia/reportes') }}">Reportes</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-local-hotel"></i><span> Hospitalización </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/hospitalizacion/habitaciones') }}">Centro Hospitalario</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user-md"></i><span> Consulta Externa </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                <?php $all = App\Models\Speciality::all() ;?>
                                @foreach($all as $spec)
                                    @if($spec->name != "")
                                    <li><a href="{{ url('/consulta_externa/'.$spec->name.'/'.$spec->id) }}">{{ $spec->name }}</a></li>
                                    @endif
                                @endforeach
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-ambulance"></i><span> Emergencia </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/components-grid.html">Liquidaciones</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-local-atm"></i> <span> Facturación </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/facturacion/sunat') }}">Documentos Emitidos</a></li>
                                    <li><a href="{{ url('/facturacion/tramas') }}">Tramas</a></li>
                                    <li><a href="{{ url('/facturacion/proveedores') }}">Proveedores</a></li>
                                    <li><a href="{{ url('/facturacion/contabilidad') }}">Contabilidad</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-laptop-mac"></i><span> Administración </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/administracion/horario') }}">Horario Medico</a></li>
                                    <li><a href="{{ url('/administracion/usuario') }}">Usuarios</a></li>
                                    <li><a href="{{ url('/administracion/personal') }}">Personal</a></li>
                                    <li><a href="{{ url('/administracion/servicios') }}">Servicios</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>