<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ingreso - {{ $system_name }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="/assets/images/favicon_1.ico">

        <link href="{{ mix_css(['/assets/css/bootstrap.min.css', '/assets/plugins/sweetalert/dist/sweetalert.css','/assets/plugins/morris.js/morris.css','/assets/css/core.css','/assets/css/icons.css','/assets/css/components.css','/assets/css/pages.css','/assets/css/menu.css','/assets/css/responsive.css'], '/assets/css/all.css')}}" rel="stylesheet" type="text/css">
        <script src="/assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <style>
        html{
            background-image: url('/assets/images/bg.jpg');
            background-repeat:no-repeat;    
            background-size: 100%;
        }
        body{
            background: none;
        }
    </style>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"><img src="/assets/images/logo.png" alt=""> </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" action="{{ url('/') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input name="username" class="form-control input-lg" type="text" required="" placeholder="Usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input name="password" class="form-control input-lg" type="password" required="" placeholder="Contraseña">
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-lg w-lg waves-effect waves-light" type="submit">Ingresar</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            2017 © {{ $system_name }}
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>


        <!-- Main  -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/detect.js"></script>
        <script src="/assets/js/fastclick.js"></script>
        <script src="/assets/js/jquery.slimscroll.js"></script>
        <script src="/assets/js/jquery.blockUI.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/jquery.nicescroll.js"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>

        <script src="/assets/js/jquery.app.js"></script>

        <script src="/assets/plugins/notifyjs/dist/notify.min.js"></script>
        <script src="/assets/plugins/notifications/notify-metro.js"></script>
        <script src="/assets/plugins/notifications/notifications.js"></script>
	
        
        <script>
            var resizefunc = [];
            
            $("button[type='submit']").click(function(){
                $(this).fadeOut();
                $(this).parent().html('<a class="btn btn-lg w-lg waves-effect waves-light" style="background-color: #39b49a;"><img src="/assets/images/heartbeat.gif" width="25px" height="25px"></a>');
                $("form").submit();
                return false;
            });

            @if(Session::has('status'))
            $(document).ready(function(){
                $.Notification.notify('warning','bottom right', 'Intente Denuevo', '{{ Session::get('status') }}');
            });
            @endif

        </script>
	</body>
</html>