<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login - GameSpeak.com.br</title>

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

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">

        <form class="form-login" method="POST" action="{{ route('auth.login') }}">
            <h2 class="form-login-heading">Faça login</h2>
            {{ csrf_field() }}
            <div class="login-wrap">
                @include('partials.error_display')
                <input type="text" class="form-control" name="email" placeholder="meu@email.com" value="{{ old('email') }}" autofocus>
                <br>
                <input type="password" class="form-control" name="password" placeholder="Senha">
                <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal"> Esqueceu a senha?</a>

		                </span>
                </label>
                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Entrar</button>
                <hr>

                <div class="registration">
                    Ainda não possui conta com a gente?<br/>
                    <a class="" href="{{ route('auth.register') }}">
                        Quero me registrar
                    </a>
                </div>

            </div>
        </form>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Esqueceu sua senha ?</h4>
                    </div>
                    <form method="POST" action="{{ route('password.reset') }}">
                        {{ csrf_field() }}
                    <div class="modal-body">
                        <p>Não tem problema, insira seu e-mail abaixo para poder recuperar sua conta</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                        <button class="btn btn-theme" type="submit">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal -->

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="/assets/js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("/assets/img/bg-login.jpg", {speed: 500});
</script>


</body>
</html>