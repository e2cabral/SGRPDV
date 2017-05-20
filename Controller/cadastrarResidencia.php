<?php

spl_autoload_register(function($class) {
    if (file_exists("./../Model/{$class}.php")) {
        require_once "./../Model/{$class}.php";
        return true;
    }
});
try {
    $r = new Residencia();

    $r->setDescricao(filter_input(INPUT_POST, 'desc'));
    //$r->setTipoObjeto(filter_input(INPUT_POST, 'tipo'));


    if (!empty($r)) {
        Transaction::open('sgrpdv');

        $r->save();
        Transaction::close();
        header("Location: ../View/home.php");
    }
        else {
            echo '<br><br><br><br><center><h1>O CPF inserido já existe em nossa base de dados!</h1></center>';
            header("Refresh:3; url=../index.php");
        }
} catch (PDOException $e) {
    echo $e->getMessage();
}


