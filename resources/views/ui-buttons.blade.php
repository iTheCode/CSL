<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">
        
        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.html" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Mail </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="mail-inbox.html">Inbox</a></li>
                                    <li><a href="mail-compose.html">Compose Mail</a></li>
                                    <li><a href="mail-read.html">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Elements </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-panels.html">Panels</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-bootstrap.html">BS Elements</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Components </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="components-grid.html">Grid</a></li>
                                    <li><a href="components-portlets.html">Portlets</a></li>
                                    <li><a href="components-widgets.html">Widgets</a></li>
                                    <li><a href="components-nestable-list.html">Nesteble</a></li>
                                    <li><a href="components-rangeslider.html">Sliders </a></li>
                                    <li><a href="components-gallery.html">Gallery </a></li>
                                    <li><a href="components-pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-redeem"></i> <span> Icons </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Forms </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-wysiwyg.html">WYSIWYG Editor</a></li>
                                    <li><a href="form-codeeditor.html">Code Editors</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Tables </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-poll"></i><span> Charts </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-peity.html">Peity Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="charts-radial.html">Radial charts</a></li>
                                    <li><a href="charts-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-place"></i><span> Maps </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-pages"></i><span> Pages </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-profile.html">Profile</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-email-template.html">Email template</a></li>
                                    <li><a href="pages-contact.html">Contact-list</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-coming-soon.html">Coming-soon</a></li>
                                    <li><a href="pages-404.html">404 Error</a></li>
                                    <li><a href="pages-404_alt.html">404 alt</a></li>
                                    <li><a href="pages-500.html">500 Error</a></li>
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
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Buttons</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Elements</a></li>
                                    <li class="active">Buttons</li>
                                </ol>
                            </div>
                        </div>
				

        				<div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Default Buttons</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-default waves-effect m-b-5">.btn-default</button>
                                        <button type="button" class="btn btn-primary waves-effect waves-light m-b-5">.btn-primary</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light m-b-5">.btn-success</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light m-b-5">.btn-info</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light m-b-5">.btn-warning</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light m-b-5">.btn-danger</button>
                                        <button type="button" class="btn btn-inverse waves-effect waves-light m-b-5">.btn-inverse</button>
                                        <button type="button" class="btn btn-purple waves-effect waves-light m-b-5">.btn-purple</button>
                                        <button type="button" class="btn btn-pink waves-effect waves-light m-b-5">.btn-pink</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Button-Custom</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-default btn-custom waves-effect m-b-5">.btn-default</button>
                                        <button type="button" class="btn btn-primary btn-custom waves-effect waves-light m-b-5">.btn-primary</button>
                                        <button type="button" class="btn btn-success btn-custom waves-effect waves-light m-b-5">.btn-success</button>
                                        <button type="button" class="btn btn-info btn-custom waves-effect waves-light m-b-5">.btn-info</button>
                                        <button type="button" class="btn btn-warning btn-custom waves-effect waves-light m-b-5">.btn-warning</button>
                                        <button type="button" class="btn btn-danger btn-custom waves-effect waves-light m-b-5">.btn-danger</button>
                                        <button type="button" class="btn btn-inverse btn-custom waves-effect waves-light m-b-5">.btn-inverse</button>
                                        <button type="button" class="btn btn-purple btn-custom waves-effect waves-light m-b-5">.btn-purple</button>
                                        <button type="button" class="btn btn-pink btn-custom waves-effect waves-light m-b-5">.btn-pink</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Button-Rounded</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-default btn-rounded waves-effect m-b-5">.btn-default</button>
                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5">.btn-primary</button>
                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light m-b-5">.btn-success</button>
                                        <button type="button" class="btn btn-info btn-rounded waves-effect waves-light m-b-5">.btn-info</button>
                                        <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-b-5">.btn-warning</button>
                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light m-b-5">.btn-danger</button>
                                        <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light m-b-5">.btn-inverse</button>
                                        <button type="button" class="btn btn-purple btn-rounded waves-effect waves-light m-b-5">.btn-purple</button>
                                        <button type="button" class="btn btn-pink btn-rounded waves-effect waves-light m-b-5">.btn-pink</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Button-Width</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-primary waves-effect waves-light w-xs m-b-5">Xs</button>
                                        <button type="button" class="btn btn-purple waves-effect waves-light w-sm m-b-5">Small</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light w-md m-b-5">Middle</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light w-lg m-b-5">Large</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Button-Sizes</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-lg m-b-5">Large button</button> 
                                        <button type="button" class="btn btn-danger waves-effect waves-light m-b-5">Normal button</button> 
                                        <button type="button" class="btn btn-success waves-effect waves-light btn-sm m-b-5">Small button</button> 
                                        <button type="button" class="btn btn-purple waves-effect waves-light btn-xs m-b-5">Extra small button</button> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Button-Disabled</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-info m-b-5" disabled="disabled">Info</button> 
                                        <button type="button" class="btn btn-purple m-b-5" disabled="disabled">Purple</button> 
                                        <button type="button" class="btn btn-pink m-b-5" disabled="disabled">Pink</button> 
                                        <button type="button" class="btn btn-inverse m-b-5" disabled="disabled">Inverse</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- end row-->

                       <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Icon Button</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-icon waves-effect btn-default m-b-5"> <i class="fa fa-heart-o"></i> </button> 
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i> </button> 
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-purple m-b-5"> <i class="fa fa-music"></i> </button> 
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-primary m-b-5"> <i class="fa fa-star"></i> </button> 
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class="fa fa-thumbs-o-up"></i> </button> 
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i class="fa fa-keyboard-o"></i> </button> 
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-wrench"></i> </button> 
                                        <br>
                                        <button type="button" class="btn btn-default waves-effect m-b-5"> <i class="fa fa-heart"></i> <span>Like</span> </button> 
                                        <button type="button" class="btn btn-inverse waves-effect waves-light m-b-5"> <i class="fa fa-envelope-o"></i> <span>Share</span> </button> 
                                        <button type="button" class="btn btn-warning waves-effect waves-light m-b-5"> <i class="fa fa-rocket"></i> <span>Launch</span> </button> 
                                        <button type="button" class="btn btn-info waves-effect waves-light m-b-5"> <i class="fa fa-cloud"></i> <span>Cloud Hosting</span> </button> 
                                        <button type="button" class="btn btn-pink waves-effect waves-light m-b-5"> <span>Book Flight</span> <i class="fa fa-plane"></i> </button> 
                                        <button type="button" class="btn btn-purple waves-effect waves-light m-b-5"> <span>Donate Money</span> <i class="fa fa-money"></i> </button>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Block Button</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="btn btn-block btn-lg btn-primary waves-effect waves-light">Block Button</button>
                                        <button type="button" class="btn btn-block btn--md btn-pink waves-effect waves-light">Block Button</button>
                                        <button type="button" class="btn btn-block btn-sm btn-success waves-effect waves-light">Block Button</button>
                                        <button type="button" class="btn btn-block btn-xs btn-purple waves-effect waves-light">Block Button</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Button Group</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="btn-group m-b-10">
                                            <button type="button" class="btn btn-default waves-effect">Left</button> 
                                            <button type="button" class="btn btn-default waves-effect">Middle</button> 
                                            <button type="button" class="btn btn-default waves-effect">Right</button>
                                        </div>
                                        <br>
                                        <div class="btn-group btn-group-justified m-b-10">
                                            <a class="btn btn-primary waves-effect waves-light" role="button">Left</a>
                                            <a class="btn btn-warning waves-effect waves-light" role="button">Middle</a>
                                            <a class="btn btn-danger waves-effect waves-light" role="button">Right</a>
                                        </div>
                                        <div class="btn-group m-b-10">
                                           <button type="button" class="btn btn-default waves-effect">1</button>
                                           <button type="button" class="btn btn-default waves-effect">2</button>
                                           <button type="button" class="btn btn-inverse waves-effect">3</button>
                                           <button type="button" class="btn btn-default waves-effect">4</button>
                                        </div>
                                        <div class="btn-group m-b-10">
                                           <button type="button" class="btn btn-default waves-effect">5</button>
                                           <button type="button" class="btn btn-inverse waves-effect">6</button>
                                           <button type="button" class="btn btn-default waves-effect">7</button>
                                        </div>
                                        <div class="btn-group m-b-10">
                                           <button type="button" class="btn btn-default waves-effect">8</button>
                                        </div>
                                        <br>
                                        <div class="btn-group m-b-10">
                                            <button type="button" class="btn btn-default waves-effect">1</button>
                                            <button type="button" class="btn btn-primary waves-effect">2</button>
                                            <button type="button" class="btn btn-default waves-effect">3</button>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Dropdown link 1</a></li>
                                                    <li><a href="#">Dropdown link 2</a></li>
                                                    <li><a href="#">Dropdown link 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="btn-group-vertical m-b-10">
                                                    <button type="button" class="btn btn-default waves-effect">Top</button>
                                                    <button type="button" class="btn btn-default waves-effect">Middle</button>
                                                    <button type="button" class="btn btn-default waves-effect">Bottom</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="btn-group-vertical m-b-10">    
                                                    <button type="button" class="btn btn-default waves-effect">Button 1</button>
                                                    <button type="button" class="btn btn-default waves-effect">Button 2</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown link 1</a></li>
                                                        <li><a href="#">Dropdown link 2</a></li>
                                                        <li><a href="#">Dropdown link 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Dropdown</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-pink dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-purple dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Split button dropdown</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-success waves-effect waves-light">Dropddown</button>
                                            <button type="button" class="btn btn-success dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Dropddown</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-default waves-effect">Dropddown</button>
                                            <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end row -->

                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Dropup</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdup <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-warning dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdup <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-success dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdup <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">Dropdup <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">File upload buttons</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="button" class="fileupload btn btn-primary waves-effect waves-light">
                                            <span>Upload</span>
                                            <input type="file" class="upload">
                                        </button>
                                        <button type="button" class="fileupload btn btn-purple waves-effect waves-light">
                                            <span><i class="ion-upload m-r-5"></i>Upload</span>
                                            <input type="file" class="upload">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- CUSTOM JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>

	
	</body>
</html>