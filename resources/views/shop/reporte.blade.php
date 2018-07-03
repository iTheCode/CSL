<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - {{ $system_name }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <link href="/assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/assets/plugins/morris.js/morris.css">

        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="/assets/js/modernizr.min.js"></script>

        <link href="/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <style>
        #chatbox{
            width:320px;
            background:#fff;
            overflow:hidden;
            height:484px;
            position:fixed;
            bottom:0;
            right:-325px;
            margin-left:-155px;
            z-index:100;
            box-shadow: 10px 10px 10px 10px #888888;
        }

        #friendslist{
            position:absolute;
            top:0;
            left:0;
            width:320px;
            height:484px;
        }
        #topmenu{
            height:69px;
            width:320px;
            border-bottom:1px solid #d8dfe3;    
        }
        #topmenu span{
            float:left; 
            width: 125px;
            height: 69px;
            margin-left: 35px;
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/top-menu.png") -3px -118px no-repeat;
        }
        #topmenu span.friends{margin-bottom:-1px;}
        #topmenu span.chats{background-position:-95px 25px; cursor:pointer;}
        #topmenu span.chats:hover{background-position:-95px -46px; cursor:pointer;}
        #topmenu span.history{background-position:-190px 24px; cursor:pointer;}
        #topmenu span.history:hover{background-position:-190px -47px; cursor:pointer;}
        .friend{

            height:70px;
            border-bottom:1px solid #e7ebee;        
            position:relative;
        }
        .friend:hover{
            background:#f1f4f6;
            cursor:pointer;
        }
        .friend img{
            width:40px;
            border-radius:50%;
            margin:15px;
            float:left;
        }
        .floatingImg{
            width:40px;
            border-radius:50%;
            position:absolute;
            top:0;
            left:12px;
            border:3px solid #fff;
        }
        .friend p{
            padding:15px 0 0 0;         
            float:left;
            width:220px;
        }
        .friend p strong{
          font-weight:600;
          font-size:15px;
            color:#597a96;  

        }
        .friend p span{
            font-size:13px;
            font-weight:400;
            color:#aab8c2;
        }
        .friend .status{
            background:#26c281;
            border-radius:50%;  
            width:9px;
            height:9px;
            position:absolute;
            top:31px;
            right:17px;
        }
        .friend .status.away{background:#ffce54;}
        .friend .status.inactive{background:#eaeef0;}
        #search_message{
            background:#e3e9ed url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/search.png") -11px 0 no-repeat;
            height:60px;
            width:320px;
            position:absolute;
            bottom:0;
            left:0;
        }
        #searchfield{
            background:#e3e9ed;
            margin:21px 0 0 55px;
            border:none;
            padding:0;
            font-size:14px;
            font-family:"Open Sans", sans-serif; 
            font-weight:400px;
            color:#8198ac;
        }
        #searchfield:focus{
             outline: 0;
        }
        #chatview{
            width:320px;
            height:484px;
            position:absolute;
            top:0;
            left:0; 
            display:none;
            background:#fff;
        }
        #profile{
            height:153px;
            overflow:hidden;
            text-align:center;
            color:#fff;
        }
        .p1 #profile{
            background:#fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/timeline1.png") 0 0 no-repeat;
            background-size: 320px;
        }
        #profile .avatar{
            width:68px;
            border:3px solid #fff;
            margin:23px 0 0;
            border-radius:50%;
        }
        #profile  p{
            font-weight:600;
            font-size:15px;
            margin:118px 0 -1px;
            opacity:0;
            -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
               -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                 -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                    transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000); 
        }
        #profile  p.animate{
            margin-top:97px;
            opacity:1;
            -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
               -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                 -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                    transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000); 
        }
        #profile  span{
            font-weight:400;
            font-size:11px;
        }
        #chat-messages{
            opacity:0;
            margin-top:30px;
            width:320px;
            height:270px;
            overflow-y:scroll;  
            overflow-x:hidden;
            padding-right: 20px;
            -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
               -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                 -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
                    transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
        }
        #chat-messages.animate{
            opacity:1;
            margin-top:0;
        }
        #chat-messages label{
            color:#aab8c2;
            font-weight:600;
            font-size:12px;
            text-align:center;
            margin:15px 0;
            width:320px;
            display:block;  
        }
        #chat-messages div.message{
            padding:0 0 30px 58px;
            clear:both;
            margin-bottom:45px;
        }
        #chat-messages div.message.right{
              padding: 0 43px 30px 0;
              margin-right: -19px;
              margin-left: 19px;
        }
        #chat-messages .message img{
              float: left;
              margin-left: -38px;
              border-radius: 50%;
              width: 30px;
              margin-top: 12px;
        }
        #chat-messages div.message.right img{
            float: right;   
            margin-left: 0;
            margin-right: -38px;    
        }
        .message .bubble{   
            background:#f0f4f7;
            font-size:13px;
            font-weight:600;
            padding:12px 13px;
            border-radius:5px 5px 5px 0px;
            color:#8495a3;
            position:relative;
            float:left;
        }
        #chat-messages div.message.right .bubble{
            float:right;
            border-radius:5px 5px 0px 5px ;
        }
        .bubble .corner{
            background:url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/bubble-corner.png") 0 0 no-repeat;
            position:absolute;
            width:7px;
            height:7px;
            left:-5px;
            bottom:0;
        }
        div.message.right .corner{
            background:url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/bubble-cornerR.png") 0 0 no-repeat;
            left:auto;
            right:-5px;
        }
        .bubble span{
              color: #aab8c2;
              font-size: 11px;
              position: absolute;
              right: 0;
              bottom: -22px;
        }
        #sendmessage{
            height:60px;
            border-top:1px solid #e7ebee;   
            position:absolute;
            bottom:0;
            right:0px;
            width:320px;
            background:#fff;
            padding-bottm:50px;
        }
        #sendmessage input{
            border
        }
        #sendmessage input{
            background:#fff;
            margin:21px 0 0 21px;
            border:none;
            padding:0;
            font-size:14px;
            font-family:"Open Sans", sans-serif; 
            font-weight:400px;
            color:#aab8c2;
        }
        #sendmessage input:focus{
             outline: 0;
        }
        #sendmessage button{
            background:#fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/send.png") 0 -41px no-repeat;
            width:30px;
            height:30px;
            position:absolute;
            right: 15px;
            top: 23px;
            border:none;
        }
        #sendmessage button:hover{
            cursor:pointer;
            background-position: 0 0 ;
        }
        #sendmessage button:focus{
             outline: 0;     
        }

        #close{
            position:absolute;
            top: 8px;   
            opacity:0.8;
            right: 10px;
            width:20px;
            height:20px;
            cursor:pointer;
        }
        #close:hover{
            opacity:1;
        }
        .cx, .cy{
            background:#fff;
            position:absolute;
            width:0px;
            top:15px;
            right:15px;
            height:3px;
            -webkit-transition: all 250ms ease-in-out;
               -moz-transition: all 250ms ease-in-out;
                -ms-transition: all 250ms ease-in-out;
                 -o-transition: all 250ms ease-in-out;
                    transition: all 250ms ease-in-out;
        }
        .cx.s1, .cy.s1{ 
            right:0;    
            width:20px; 
            -webkit-transition: all 100ms ease-out;
               -moz-transition: all 100ms ease-out;
                -ms-transition: all 100ms ease-out;
                 -o-transition: all 100ms ease-out;
                    transition: all 100ms ease-out;
        }
        .cy.s2{ 
            -ms-transform: rotate(50deg); 
            -webkit-transform: rotate(50deg); 
            transform: rotate(50deg);        
            -webkit-transition: all 100ms ease-out;
               -moz-transition: all 100ms ease-out;
                -ms-transition: all 100ms ease-out;
                 -o-transition: all 100ms ease-out;
                    transition: all 100ms ease-out;
        }
        .cy.s3{ 
            -ms-transform: rotate(45deg); 
            -webkit-transform: rotate(45deg); 
            transform: rotate(45deg);        
            -webkit-transition: all 100ms ease-out;
               -moz-transition: all 100ms ease-out;
                -ms-transition: all 100ms ease-out;
                 -o-transition: all 100ms ease-out;
                    transition: all 100ms ease-out;
        }
        .cx.s1{ 
            right:0;    
            width:20px; 
            -webkit-transition: all 100ms ease-out;
               -moz-transition: all 100ms ease-out;
                -ms-transition: all 100ms ease-out;
                 -o-transition: all 100ms ease-out;
                    transition: all 100ms ease-out;
        }
        .cx.s2{ 
            -ms-transform: rotate(140deg); 
            -webkit-transform: rotate(140deg); 
            transform: rotate(140deg);       
            -webkit-transition: all 100ms ease-out;
               -moz-transition: all 100ms ease-out;
                -ms-transition: all 100ease-out;
                 -o-transition: all 100ms ease-out;
                    transition: all 100ms ease-out;
        }
        .cx.s3{ 
            -ms-transform: rotate(135deg); 
            -webkit-transform: rotate(135deg); 
            transform: rotate(135deg);       
            -webkit-transition: all 100ease-out;
               -moz-transition: all 100ms ease-out;
                -ms-transition: all 100ms ease-out;
                 -o-transition: all 100ms ease-out;
                    transition: all 100ms ease-out;
        }
        #chatview, #sendmessage { 
        overflow:hidden; 
        border-radius:6px; 
        }

    </style>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar ">
                <!-- LOGO -->
                <div class="topbar-left bg-success">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="/assets/images/icono.png" alt="CSLuren" width="30" height="30"> <span>{{ $system_name }} </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default bg-success" role="navigation">
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
                                    <input type="text" class="form-control search-bar" placeholder="Buscar por Número DNI">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="button-active-chat" class="right-bar-toggle waves-effect"><i class="md md-chat"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
<div id="chatbox">
    <div id="friendslist">
        <div id="topmenu">
            <span class="history"></span>
            <span class="friends"></span>
        </div>
        
        <div id="friends">
            
            <div class="friend">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3_copy.jpg" />
                <p>
                    <strong>Tomas Kennedy</strong>
                    <span>tomaskennedy@gmail.com</span>
                </p>
                <div class="status inactive"></div>
            </div>
            
            <div class="friend">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4_copy.jpg" />
                <p>
                    <strong>Enrique Sutton</strong>
                    <span>enriquesutton@gmail.com</span>
                </p>
                <div class="status inactive"></div>
            </div>
            
            <div class="friend">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5_copy.jpg" />
                <p>
                <strong>    Darnell Strickland</strong>
                    <span>darnellstrickland@gmail.com</span>
                </p>
                <div class="status inactive"></div>
            </div>
            
            <div id="search_message">
                <input type="text" id="searchfield" value="Search contacts..." />
            </div>
            
        </div>                
        
    </div>  
    
    <div id="chatview" class="p1">      
        <div id="profile">

            <div id="close">
                <div class="cy"></div>
                <div class="cx"></div>
            </div>
            
            <p>Miro Badev</p>
            <span>miro@badev@gmail.com</span>
        </div>


        <div id="chat-messages">
            <label>Thursday 02</label>
            
            <div class="message">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg" />
                <div class="bubble">
                    Really cool stuff!
                    <div class="corner"></div>
                    <span>3 min</span>
                </div>
            </div>
            
            <div class="message right">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                <div class="bubble">
                    Can you share a link for the tutorial?
                    <div class="corner"></div>
                    <span>1 min</span>
                </div>
            </div>
            
            <div class="message">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg" />
                <div class="bubble">
                    Yeah, hold on
                    <div class="corner"></div>
                    <span>Now</span>
                </div>
            </div>
            
            <div class="message right">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                <div class="bubble">
                    Can you share a link for the tutorial?
                    <div class="corner"></div>
                    <span>1 min</span>
                </div>
            </div>
            
            <div class="message">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg" />
                <div class="bubble">
                    Yeah, hold on
                    <div class="corner"></div>
                    <span>Now</span>
                </div>
            </div>
            
        </div>
        
        <div id="sendmessage">
            <input type="text" value="Send message..." />
            <button id="send"></button>
        </div>
    
    </div>        
</div>  
    

            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                @include('menu')
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
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">{{  $system_name }}</a></li>
                                    <li class="active">Atenciones</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                       <div class="" style="">
                                        <div class="panel" style="margin:0 auto;width:450px">
                                            <div class="panel-body">
                                                <div class="media-main">
                                                    <div class="btn-group-sm">
                                                    <h4>Generar Reporte</h4>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr>
                                                <form id="generate">
                                                <div>
                                                    Fecha de Inicio
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="date_init" class="form-control datepicker" placeholder="yyyy-mm-dd">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><br><br>
                                                    Fecha Fin
                                                    <div class="input-group col-md-12">
                                                        <input type="text" name="date_end" class="form-control datepicker" placeholder="yyyy-mm-dd">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><br><br>
                                                    Tipo de Documento
                                                    <div class="input-group col-md-12">
                                                        <select name="pay_document_type_id" class="form-control">
                                                            <option>Seleccione un Tipo de Documento</option>
                                                            <option value="1">Facturas Electrónicas</option>
                                                            <option value="2">Boletas Electrónicas</option>
                                                        </select>
                                                    </div><br><br>
                                                    Admisionista
                                                    <div class="input-group col-md-12">
                                                        {{ Form::select('employee', [null=>'Seleccione una admisionista'] + $employees , null, ['class' => 'select2 form-control']) }}
                                                    </div><br><br>
                                                </div>
                                                <div class="pull-right"><br>
                                                    <button type="submit" class="btn btn-success btn-custom waves-effect waves-light m-b-5">Generar</button>
                                                </div>
                                                </form>
                                            </div> <!-- panel-body -->
                                        </div> <!-- panel -->
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div> <!-- End row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->
                <footer class="footer text-right">
                    {{ $this_year}} © {{ $system_name }}
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
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
        
        <!-- jQuery  -->
        <script src="/assets/plugins/moment/moment.js"></script>
        
        <!-- jQuery  -->
        <script src="/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="/assets/plugins/counterup/jquery.counterup.min.js"></script>
        
        <!-- jQuery  -->
        <script src="/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        

        <!-- jQuery  -->
        <script src="/assets/pages/jquery.todo.js"></script>
        
        <!-- jQuery  -->
        <script src="/assets/pages/jquery.chat.js"></script>
        
        <!--Morris Chart-->
        <script src="/assets/plugins/raphael/raphael-min.js"></script>
        
        <script src="/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        
        <script type="text/javascript">



        $(document).ready(function(){
            
          var preloadbg = document.createElement("img");
          preloadbg.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/timeline1.png";
          

            $("#button-active-chat").click(function(){
                if($(this).hasClass('opened')){
                    //se cierra
                    $(this).removeClass('opened');
                    $("#chatbox").animate({
                        'right': "-325px"
                    }, 200);
                }else{
                    // se abre
                    $(this).addClass('opened');
                    $("#chatbox").animate({
                        'right': "0px"
                    }, 200);
                }

            });
            $("#searchfield").focus(function(){
                if($(this).val() == "Search contacts..."){
                    $(this).val("");
                }
            });
            $("#searchfield").focusout(function(){
                if($(this).val() == ""){
                    $(this).val("Search contacts...");
                    
                }
            });
            
            $("#sendmessage input").focus(function(){
                if($(this).val() == "Send message..."){
                    $(this).val("");
                }
            });
            $("#sendmessage input").focusout(function(){
                if($(this).val() == ""){
                    $(this).val("Send message...");
                    
                }
            });
                
            
            $(".friend").each(function(){       
                $(this).click(function(){
                    var childOffset = $(this).offset();
                    var parentOffset = $(this).parent().parent().offset();
                    var childTop = childOffset.top - parentOffset.top;
                    var clone = $(this).find('img').eq(0).clone();
                    var top = childTop+12+"px";
                    
                    $(clone).css({'top': top}).addClass("floatingImg").appendTo("#chatbox");                                    
                    
                    setTimeout(function(){$("#profile p").addClass("animate");$("#profile").addClass("animate");}, 100);
                    setTimeout(function(){
                        $("#chat-messages").addClass("animate");
                        $('.cx, .cy').addClass('s1');
                        setTimeout(function(){$('.cx, .cy').addClass('s2');}, 100);
                        setTimeout(function(){$('.cx, .cy').addClass('s3');}, 200);         
                    }, 150);                                                        
                    
                    $('.floatingImg').animate({
                        'width': "68px",
                        'left':'130px',
                        'top':'20px'
                    }, 200);
                    
                    var name = $(this).find("p strong").html();
                    var email = $(this).find("p span").html();                                                      
                    $("#profile p").html(name);
                    $("#profile span").html(email);         
                    
                    $(".message").not(".right").find("img").attr("src", $(clone).attr("src"));                                  
                    $('#friendslist').fadeOut();
                    $('#chatview').fadeIn();
                
                    
                    $('#close').unbind("click").click(function(){               
                        $("#chat-messages, #profile, #profile p").removeClass("animate");
                        $('.cx, .cy').removeClass("s1 s2 s3");
                        $('.floatingImg').animate({
                            'width': "40px",
                            'top':top,
                            'left': '12px'
                        }, 200, function(){$('.floatingImg').remove()});                
                        
                        setTimeout(function(){
                            $('#chatview').fadeOut();
                            $('#friendslist').fadeIn();             
                        }, 50);
                    });
                    
                });
            });         
        });


            $('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
            function date_now_format() {
              now = new Date();
              year = "" + now.getFullYear();
              month = "" + (now.getMonth() + 1); if (month.length == 1) { month = "0" + month; }
              day = "" + now.getDate(); if (day.length == 1) { day = "0" + day; }
              hour = "" + now.getHours(); if (hour.length == 1) { hour = "0" + hour; }
              minute = "" + now.getMinutes(); if (minute.length == 1) { minute = "0" + minute; }
              second = "" + now.getSeconds(); if (second.length == 1) { second = "0" + second; }
              return year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
            }
            $('#generate').submit(function(e){
                e.preventDefault();
                var form = $(this);
                $.ajax(
                {
                    url: "{{ url('/caja/generar_reporte/') }}", 
                    method: "GET",
                    data: form.serialize(),
                    success: function(response, status, xhr) {
                            // check for a filename
                            var filename = "documentos_"+date_now_format();
                            var disposition = xhr.getResponseHeader('Content-Disposition');
                            if (disposition && disposition.indexOf('attachment') !== -1) {
                                var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                var matches = filenameRegex.exec(disposition);
                                if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                            }

                            var type = xhr.getResponseHeader('Content-Type');
                            var blob = new Blob([response], { type: type });

                            if (typeof window.navigator.msSaveBlob !== 'undefined') {
                                // IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                                window.navigator.msSaveBlob(blob, filename);
                            } else {
                                var URL = window.URL || window.webkitURL;
                                var downloadUrl = URL.createObjectURL(blob);

                                if (filename) {
                                    // use HTML5 a[download] attribute to specify filename
                                    var a = document.createElement("a");
                                    // safari doesn't support this yet
                                    if (typeof a.download === 'undefined') {
                                        window.location = downloadUrl;
                                    } else {
                                        a.href = downloadUrl;
                                        a.download = filename;
                                        document.body.appendChild(a);
                                        a.click();
                                    }
                                } else {
                                    window.location = downloadUrl;
                                }

                                setTimeout(function () { URL.revokeObjectURL(downloadUrl); }, 100); // cleanup
                            }
                        },
                    complete: function(){
                        $.address.value("/caja/atenciones");
                    }
                });
                return false;

            });
        </script>

    
    </body>
</html>



