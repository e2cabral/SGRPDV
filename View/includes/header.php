<!DOCTYPE html>
<?php
    session_start();
//    echo $_SESSION['login'];
//echo $_SESSION['senha'];
//echo $_SESSION['cpf'];
    if(!isset($_SESSION['login'])==true && !isset($_SESSION['senha'])==true && !isset($_SESSION['cpf'])==true){
//        unset($_SESSION['login']);
//        unset($_SESSION['senha']);
//        unset($_SESSION['cpf']);
        header('Location: ./../index.php');
    }
    else {
        //header('Location: ./../index.php');
    }
?>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header class="navbar-fixed">
        <nav class="nav-wrapper blue grey darken-4">
            <div>
                <a href="home.php" class="brand-logo left">LOUIS - SGRPDV</a>
            </div>
            <ul class="right hide-on-med-and-down">
                <li><a class="" href="../Controller/sairCtrl.php"><i class="material-icons right">power_settings_new</i></a></li>
            </ul>
        </nav>
    </header>

    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="userView">
                <div class="background">
                    <img src="img/bridge-skyscraper-city.jpg" class="responsive-img">
                </div>
                <a href="#!user"><img class="circle" src="img/sunset-building-skyscraper.jpg"></a>
                <a href="#!name"><span class="white-text name"><?php echo $_SESSION['login']; ?></span></a>
                <a href="#!email"><span class="white-text email"><?php echo $_SESSION['cpf']; ?></span></a>
            </div>
        </li>
        <li><a href="home.php"><i class="material-icons">home</i>Home</a></li>
        <li><a href="perfil.php"><i class="material-icons">perm_identity</i>Perfil</a></li>
        <div class="divider"></div>
        <li class="no-padding"></li>
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header" href="#!">Cadastrar<i class="material-icons left">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul class="">
                        <li><a class="waves-effect" href="cadastrar-usuario.php">Deficientes</a></li>
                        <li><a class="waves-effect" href="cadastrar-familiar.php">Familiar</a></li>
                        <li><a class="waves-effect" href="cadastrar-dispositivo.php">Dispositivo</a></li>
                        <li><a class="waves-effect" href="cadastrar-sensor.php">Sensor</a></li>
<!--                        <li><a class="waves-effect" href="cadastrar-bengala.php">Bengala</a></li>-->
                        <li><a class="waves-effect" href="cadastrarObjeto.php">Objeto</a></li>
                        <li><a class="waves-effect" href="cadastrar-residencia.php">Residência</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <li><a class="waves-effect collapsible-header" href="editar.php">Consultar<i class="material-icons left">mode_edit</i></a></li>
        <li><a class="waves-effect collapsible-header" href="localizar.php">Localizar Deficiente<i class="material-icons left">location_on</i></a></li>
<!--        <li class="no-padding"><a class="waves-effect collapsible-header" href="#!">Configurações<i class="material-icons left">settings</i></a></li>-->
    </ul>

