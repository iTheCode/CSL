
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="/assets/images/users/profile.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ $user }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Perfil<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Configuración</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Salir</a></li>
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
                                    <li><a href="{{ url('/atenciones') }}">Lista de Atenciones</a></li>
                                    <li><a href="{{ url('/citas') }}">Lista de Citas</a></li>
                                    <li><a href="{{ url('/horario') }}">Horario Médico</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-payment"></i> <span> Caja </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/servicios_recientes') }}">Servicios Recientes</a></li>
                                    <!--<li><a href="{{ url('/exportar_caja') }}">Exportar Caja</a></li>-->
                                </ul>
                            </li>
<
                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="fa fa-stethoscope"></i> <span> Triaje </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/ui-typography.html">Servicios Recientes</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/ui-buttons.html">Exportar Caja</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="http://moltran.coderthemes.com/purple/calendar.html" class="waves-effect"><i class="md md-perm-identity"></i><span> Pacientes </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/pacientes') }}">Lista de Pacientes</a></li>
                                    <li><a href="{{ url('/monsantoo') }}">Ingresar Monsanto</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="ion-medkit"></i><span> Farmacia </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/components-grid.html">Liquidaciones</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-portlets.html">Portlets</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-widgets.html">Widgets</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-nestable-list.html">Nesteble</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-rangeslider.html">Sliders </a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-gallery.html">Gallery </a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-local-hotel"></i><span> Hospitalización </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/components-grid.html">Liquidaciones</a></li>
                                </ul>
                            </li>
<!--
                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="fa fa-user-md"></i><span> Consulta Externa </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/components-grid.html">Liquidaciones</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-portlets.html">Portlets</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-widgets.html">Widgets</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-nestable-list.html">Nesteble</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-rangeslider.html">Sliders </a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-gallery.html">Gallery </a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="fa fa-ambulance"></i><span> Emergencia </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/components-grid.html">Liquidaciones</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-portlets.html">Portlets</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-widgets.html">Widgets</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-nestable-list.html">Nesteble</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-rangeslider.html">Sliders </a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-gallery.html">Gallery </a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/components-pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-local-atm"></i> <span> Facturación </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/icons-material.html">Lista de Facturas</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/icons-ion.html">Generar Lotes</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/icons-ion.html">Exportar Proveedores</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/icons-ion.html">Exportar Contabilidad</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-laptop-mac"></i><span> Administración </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/mail-inbox.html">Administrar Horario</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/mail-inbox.html">Administrar Usuarios</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/mail-compose.html">Personal</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/mail-compose.html">Servicios</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/mail-compose.html">Estadísticas</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/mail-read.html">Notas de Crédito</a></li>
                                </ul>
                            </li>

                            <!--
                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-now-widgets"></i><span> Forms </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/form-elements.html">General Elements</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/form-validation.html">Form Validation</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/form-advanced.html">Advanced Form</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/form-wizard.html">Form Wizard</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/form-wysiwyg.html">WYSIWYG Editor</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/form-codeeditor.html">Code Editors</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/form-uploads.html">Multiple File Upload</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-view-list"></i><span> Tables </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/tables-basic.html">Basic Tables</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/tables-datatable.html">Data Table</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/tables-editable.html">Editable Table</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/tables-responsive.html">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-poll"></i><span> Charts </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/charts-morris.html">Morris Chart</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/charts-flot.html">Flot Chart</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/charts-peity.html">Peity Charts</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/charts-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/charts-radial.html">Radial charts</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/charts-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-place"></i><span> Maps </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/maps-google.html"> Google Map</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="index.html#" class="waves-effect"><i class="md md-pages"></i><span> Pages </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-profile.html">Profile</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-timeline.html">Timeline</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-invoice.html">Invoice</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-email-template.html">Email template</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-contact.html">Contact-list</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-login.html">Login</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-register.html">Register</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-blank.html">Blank Page</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-coming-soon.html">Coming-soon</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-404.html">404 Error</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-404_alt.html">404 alt</a></li>
                                    <li><a href="http://moltran.coderthemes.com/purple/pages-500.html">500 Error</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-share"></i><span>Multi Level </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>