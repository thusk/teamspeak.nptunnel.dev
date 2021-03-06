<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>GameSpeak - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        @if($agent->isMobile())
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        @endif
        <!--logo start-->
        <a href="{{ route('index') }}" class="logo"><b>GameSpeak</b></a>
        <!--logo end-->



        @if($auth->check())
            <div class="top-menu">
                <ul class="nav pull-right top-menu" style="padding-top:13px; padding-right:30px;">
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">{{ $auth->user()->name }}</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('account.settings') }}"><i class="fa fa-smile-o"></i> Minha conta</a></li>
                                <li><a href="{{ route('account.help.index') }}"><i class="fa fa-life-ring"></i> Suporte</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out"></i> Deslogar</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        @else
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{ route('auth.login') }}">Entrar</a></li>
                </ul>
            </div>
        @endif

        @if(Session::get('cart')->count())
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{ route('account.cart.index') }}"><i class="fa fa-shopping-cart"></i> Carrinho</a></li>
                </ul>
            </div>
        @endif
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                @if($auth->check())
                    <p class="centered">@if($auth->user()->is_admin)<a href="{{ route('admin.index') }}"> @else <a href="{{ route('account.index') }}"> @endif <img src="/img/avatar/thusk-avatar.png" style="margin-left:-60px;" width="128"></p>
                    <h5 class="centered">{{ $auth->user()->name }}</h5></a>
                @endif

                @yield('menu')

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> @yield('title')</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    @include('partials.error_display')
                    @yield('content')
                </div>
            </div>
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            &copy; 2015 - GameSpeak.com.br
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>
<script src="/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="/assets/js/common-scripts.js"></script>

<!--script for this page-->
<script src="/assets/js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom switch-->
<script src="/assets/js/bootstrap-switch.js"></script>

<!--custom tagsinput-->
<script src="/assets/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


<script src="/assets/js/form-component.js"></script>




@yield('js-scripts')

</body>
</html>