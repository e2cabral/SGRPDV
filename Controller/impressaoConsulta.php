<?php

spl_autoload_register(function($class) {
            if (file_exists("./../Model/{$class}.php")) {
                require_once "./../Model/{$class}.php";
                return true;
            }
        });
Transaction::open('sgrpdv');
    $impressao = new Deficiente();
    $imp = $impressao->find(filter_input(INPUT_POST, 'cpf'));
    //
Transaction::close();
//var_dump($imp);