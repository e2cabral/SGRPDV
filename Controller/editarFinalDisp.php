<?php



spl_autoload_register(function($class) {
    if (file_exists("./../Model/{$class}.php")) {
        require_once "./../Model/{$class}.php";
        return true;
    }
});
try {
    $d = new Dispositivo();
    $d->setSerial(filter_input(INPUT_POST, 'serial'));
    $d->setTipo(filter_input(INPUT_POST, 'tipo'));
    $d->setDescricao(filter_input(INPUT_POST, 'desc'));

    if (!empty($d)) {
        Transaction::open('sgrpdv');

        $d->update(filter_input(INPUT_POST, 'id'));
        Transaction::close();
        header("Location: ../View/editar.php");
    }
        else {
            echo '<br><br><br><br><center><h1>O Dispositivo não foi Alterado!</h1></center>';
            header("Refresh:3; url=../View/editar.php");
        }
} catch (PDOException $e) {
    echo $e->getMessage();
}

