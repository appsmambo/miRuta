<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head>
        <title>MIRUTA - La seguridad de sus hijos es nuestro compromiso</title>
        <!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/bootstrap/css/bootstrap.min.css">

        <!-- Bootstrap Extended -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css">
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css">

        <!-- Select2 -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/scripts/plugins/forms/select2/select2.css">

        <!-- Notyfy -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css">
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/scripts/plugins/notifications/notyfy/themes/default.css">

        <!-- Gritter Notifications Plugin -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css">

        <!-- JQueryUI v1.9.2 -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/scripts/plugins/system/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css">

        <!-- glyphicons -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/css/glyphicons.css">

        <!-- font awesome -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/css/font-awesome/css/font-awesome.min.css">

        <!-- Bootstrap Extended -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/bootstrap/extend/bootstrap-select/bootstrap-select.css">
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css">
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/bootstrap/extend/bootstrap-switch/static/stylesheets/bootstrap-switch.css">

        <!-- Uniform -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" media="screen">

        <!-- google-code-prettify -->
        <link type="text/css" rel="stylesheet" href="{{url()}}/public/theme/scripts/plugins/other/google-code-prettify/prettify.css">

        <!-- Theme -->
        <link rel="stylesheet" href="{{url()}}/public/theme/css/style.css?1382104445">
        <link rel="stylesheet" href="{{url()}}/public/theme/skins/css/black-and-white.css?1382104445">
        <link rel="stylesheet" href="{{url()}}/public/css/main.css">

        <!-- JQuery v1.8.2 -->
        <script src="{{url()}}/public/theme/scripts/plugins/system/jquery-1.8.2.min.js"></script>

        <!-- Modernizr -->
        <script src="{{url()}}/public/theme/scripts/plugins/system/modernizr.custom.76094.js"></script>

        <!-- Google Analytics -->
        <script>
            // PEGAR AQUI
        </script>

        <!-- LESS 2 CSS -->
        <script src="{{url()}}/public/theme/scripts/plugins/system/less-1.3.3.min.js"></script>
    </head>
    <body>
        <!-- Start Content -->
        <div class="first-container right-menu">
            <div class="navbar main hidden-print">
                <a href="{{url()}}/" class="appbrand">
                    <img src="{{url()}}/public/images/logo.png" alt="MIRUTA">
                </a>
                <button type="button" class="btn btn-navbar">
                    <span class="glyphicons show_lines toggle"></span>
                </button>
                <ul class="topnav pull-right">
                    <li class="account">
                        <a data-toggle="dropdown" href="my_account.html?lang=en" class="glyphicons logout lock"><span class="hidden-sm text">Administrador</span></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" class="glyphicons cogwheel">Detalles de la cuenta</a></li>
                            <li>
                                <span>
                                    <a class="btn btn-default btn-small pull-right" style="padding: 2px 10px; background: #fff;" href="{{url()}}/">Salir</a>
                                </span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            @yield('content')
        </div>

        <!-- JQueryUI v1.9.2 -->
        <script src="{{url()}}/public/theme/scripts/plugins/system/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>

        <!-- JQueryUI Touch Punch -->
        <!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
        <script src="{{url()}}/public/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

        <!-- Select2 -->
        <script src="{{url()}}/public/theme/scripts/plugins/forms/select2/select2.js"></script>

        <!-- jQuery Slim Scroll Plugin -->
        <script src="{{url()}}/public/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>

        <!-- Common Demo Script -->
        <script src="{{url()}}/public/theme/scripts/demo/common.js?1382104445"></script>

        <!-- Uniform -->
        <script src="{{url()}}/public/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>

        <!-- Bootstrap Script -->
        <script src="{{url()}}/public/bootstrap/js/bootstrap.min.js"></script>

        <!-- Bootstrap Extended -->
        <script src="{{url()}}/public/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
        <script src="{{url()}}/public/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
        <script src="{{url()}}/public/bootstrap/extend/bootstrap-switch/static/js/bootstrap-switch.min.js"></script>
        <script src="{{url()}}/public/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script src="{{url()}}/public/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="{{url()}}/public/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js"></script>
        <script src="{{url()}}/public/bootstrap/extend/bootbox.js"></script>
        <script src="{{url()}}/public/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
        <script src="{{url()}}/public/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>

        <!-- Layout Options DEMO Script -->
        <script src="{{url()}}/public/theme/scripts/demo/layout.js"></script>

        <!-- Openlayers -->
        <script src="{{url()}}/public/js/OpenLayers/lib/OpenLayers.js"></script>

        <!-- google-code-prettify -->
        <script src="{{url()}}/public/theme/scripts/plugins/other/google-code-prettify/prettify.js"></script>

        <!-- Gritter Notifications Plugin -->
        <script src="{{url()}}/public/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>

        <!-- Notyfy -->
        <script src="{{url()}}/public/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>
        
        <script src="{{url()}}/public/js/inicio.js"></script>
    </body>
</html>