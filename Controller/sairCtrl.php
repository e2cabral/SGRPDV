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
<?php
    session_destroy();
    echo $_SESSION['login'];
    echo $_SESSION['senha'];
    echo $_SESSION['cpf'];

//    if(!isset($_SESSION['login'])==true && !isset($_SESSION['senha'])==true && !isset($_SESSION['cpf'])==true){
//        $_SESSION['login'] = false;
//        $_SESSION['senha'] = false;
//        $_SESSION['cpf'] = false;
        //session_destroy();
//    }
//    else {
        header('Location: ./../index.php');
//    }

