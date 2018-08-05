<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
    <!-- LOAD CSS FILES -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body data-spy="scroll">
    <div id="preloader"></div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <span id="menu-btn"></span>
                <div class="row">
                    <div class="col-md-3">

                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="{{ url('/') }}">
                                    <img src="img/logo_fan_new.png" alt="" class="logo-1">
                                    <img src="img/logo-2.png" alt="" class="logo-2">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>

                    <div class="col-md-9">

                        <!-- mainmenu begin -->
                        <div id="mainmenu-container">
                            <ul id="mainmenu">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/quem-somos') }}">Quem somos</a></li>
                                <li><a href="{{ url('/nossa-atuacao') }}">Nossa atuação</a></li>
                                <li><a href="{{ url('/entidades-parceiras') }}">Entidades parceiras</a></li>
                                <li><a href="{{ url('/participe-do-fan') }}">Participe do F.A.N.</a></li>
                                <li><a href="{{ url('/contato') }}">Contato</a></li>
                            </ul>
                        </div>
                        <!-- mainmenu close -->
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        @yield('content')

        </div>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Copyiright 2018 - F.A.N.
                    </div>
                    <div class="col-md-6">
                        <nav>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/quem-somos') }}">Quem somos</a></li>
                                <li><a href="{{ url('nossa-atuacao') }}">Nossa atuação</a></li>
                                <li><a href="{{ url('entidades-parceiras') }}">Entidades parceiras</a></li>
                                <li><a href="{{ url('participe-do-fan') }}">Participe do F.A.N.</a></li>
                                <li><a href="{{ url('contato') }}">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    <!-- LOAD JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/ender.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/countdown-custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="js/map.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- <script src="js/rev-setting-1.js"></script> -->
</body>
</html>
