<?php

spl_autoload_register(function($class) {
    if (file_exists("./../Model/{$class}.php")) {
        require_once "./../Model/{$class}.php";
        return true;
    }
});

session_start();

$session = new Session();
$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');

Transaction::open('sgrpdv');

$ses = $session->iniSession($login, $senha);


if(!empty($ses)){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['cpf'] = $ses[0]->cpf;
    header('Location: ../View/home.php');
}
else {
    header('Location: ../index.php');
}

echo $_SESSION['login'];
echo $_SESSION['senha'];
echo $_SESSION['cpf'];

Transaction::close();
