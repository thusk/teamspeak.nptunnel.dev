@extends('Client.Layout.default')
@section('title','TsBOT')
@section('content')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">r2d2BOT</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Ajustes</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Friend list <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Players</li>
                            <li><a href="#">Listar players</a></li>
                            <li><a href="#">Adicionar player</a></li>
                            <li><a href="#">Remover Player</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Guilds</li>
                            <li><a href="#">Listar guilds</a></li>
                            <li><a href="#">Adicionar guild</a></li>
                            <li><a href="#">Remover guild</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enemy list <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Players</li>
                            <li><a href="#">Listar players</a></li>
                            <li><a href="#">Adicionar player</a></li>
                            <li><a href="#">Remover Player</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Guilds</li>
                            <li><a href="#">Listar guilds</a></li>
                            <li><a href="#">Adicionar guild</a></li>
                            <li><a href="#">Remover guild</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
@endsection