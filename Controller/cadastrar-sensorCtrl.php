<?php

spl_autoload_register(function($class) {
    if (file_exists("./../Model/{$class}.php")) {
        require_once "./../Model/{$class}.php";
        return true;
    }
});

try {
    $s = new Sensor();
    $s->setDescricao(filter_input(INPUT_POST, 'desc'));

    if (!empty($s)) {
        Transaction::open('sgrpdv');

            $s->save();
            Transaction::close();
            header("Location: ../View/home.php");
        }
        else {
            echo '<br><br><br><br><center><h1>Não foi possível cadastrar o sensor</h1></center>';
            header("Refresh:3; url=../index.php");
        }
} catch (PDOException $e) {
    echo $e->getMessage();
}
