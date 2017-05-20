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

    if (!empty($r)) {
        Transaction::open('sgrpdv');

        $r->update(filter_input(INPUT_POST, 'id'));
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

