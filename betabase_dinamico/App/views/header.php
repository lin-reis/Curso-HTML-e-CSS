<!doctype html>
<html>

<head>
    <title>betabase</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="app/css/estilo.css">
    <link rel="shortcut icon" href="app/img/favicon.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed">
            <div class="container"> <!-- essa div é base do bootstrap -->
                <div class="navbar-header">
                    <!-- LOGO -->
                    <a href="?i=home" alt="betabase - home" title="Home"><img id="logo" src="app/img/logo.svg"></a>
                    <!-- SMARTPHONE -->
                    <button type="button" style="margin-top:25px" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#menu_lista" aria-expanded="false">
                        <!-- esse collapse siginifica que ao reduzir o tamanho da página ele muda o modelo de menu e fica aqueles 3 risquinhos. O comando encerra ao final do Button  -->
                        <span style="background-color:#9bbd46" class="icon-bar"></span>
                        <span style="background-color:#9bbd46" class="icon-bar"></span>
                        <span style="background-color:#9bbd46" class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="menu_lista">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="link_menu"><a href="?i=sobre">Sobre</a></li>
                        <li class="link_menu"><a href="#">Listar</a></li>
                        <li class="link_menu"><a href="#">Projetos</a></li>
                        <li class="link_menu"><a href="#" data-toggle="modal" data-target="#help">Ajuda</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>