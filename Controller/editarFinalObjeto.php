<?php

spl_autoload_register(function($class) {
    if (file_exists("./../Model/{$class}.php")) {
        require_once "./../Model/{$class}.php";
        return true;
    }
});
try {
    $o = new Objeto();
    $o->setDescricao(filter_input(INPUT_POST, 'desc'));
    $o->setTipoObjeto(filter_input(INPUT_POST, 'tipo'));

    if (!empty($o)) {
        Transaction::open('sgrpdv');

        $o->update(filter_input(INPUT_POST, 'id'));
        Transaction::close();
        header("Location: ../View/editar.php");
    }
        else {
            echo '<br><br><br><br><center><h1>O Usuário não foi Alterado!</h1></center>';
            header("Refresh:3; url=../View/editar.php");
        }
} catch (PDOException $e) {
    echo $e->getMessage();
}

