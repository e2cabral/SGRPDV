<?php

spl_autoload_register(function($class) {
    if (file_exists("./../Model/{$class}.php")) {
        require_once "./../Model/{$class}.php";
        return true;
    }
});
try {
    $f = new Familiar();

    $f->setCpf(filter_input(INPUT_POST, 'cpf'));
    $f->setNome(filter_input(INPUT_POST, 'nome'));
    $f->setIdade(filter_input(INPUT_POST, 'idade'));
    $f->setLogin(filter_input(INPUT_POST, 'login'));
    $f->setSenha(filter_input(INPUT_POST, 'senha'));
    $f->setEndereco(filter_input(INPUT_POST, 'endereco'));
    $f->setCidade(filter_input(INPUT_POST, 'cidade'));
    $f->setCep(filter_input(INPUT_POST, 'cep'));
    $f->setTelefone(filter_input(INPUT_POST, 'tel'));
    $f->setCelular(filter_input(INPUT_POST, 'cel'));
    $f->setGrauParentesco(filter_input(INPUT_POST, 'def'));

    if (!empty($f)) {
        Transaction::open('sgrpdv');

        $result = $f->find($f->getCpf());
        $i = 0;

        if (!empty($result[0]->cpf)) {
            $f->update();
            Transaction::close();
            header("Location: ../View/editar.php");
        }
        else {
            echo '<br><br><br><br><center><h1>O Usuário não foi Alterado!</h1></center>';
            header("Refresh:3; url=../View/editar.php");
        }

    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

