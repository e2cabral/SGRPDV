<?php

spl_autoload_register(function($class) {
    if (file_exists("./../Model/{$class}.php")) {
        require_once "./../Model/{$class}.php";
        return true;
    }
});
try {
    $f = new Deficiente();

    $f->setCpf(filter_input(INPUT_POST, 'cpf'));
    $f->setNome(filter_input(INPUT_POST, 'nome'));
    $f->setIdade(filter_input(INPUT_POST, 'idade'));
    $f->setEndereco(filter_input(INPUT_POST, 'endereco'));
    $f->setCidade(filter_input(INPUT_POST, 'cidade'));
    $f->setCep(filter_input(INPUT_POST, 'cep'));
    $f->setTelefone(filter_input(INPUT_POST, 'tel'));
    $f->setCelular(filter_input(INPUT_POST, 'cel'));
    $f->setGrauDeficiencia(filter_input(INPUT_POST, 'def'));

    if (!empty($f)) {
        Transaction::open('sgrpdv');

        $result = $f->find($f->getCpf());
        $i = 0;

        if (empty($result[0]->cpf)) {
            $f->save();
            Transaction::close();
            header("Location: ../View/home.php");
        }
        else {
            echo '<br><br><br><br><center><h1>O CPF inserido já existe em nossa base de dados!</h1></center>';
            header("Refresh:3; url=../index.php");
        }

    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
