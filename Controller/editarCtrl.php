<?php
spl_autoload_register(function($class){
    if(file_exists("./../Model/{$class}.php")){
        require_once "./../Model/{$class}.php";
        return true;
    }
});
?>
<?php

Transaction::open('sgrpdv');
$f = new Familiar();
$d = new Deficiente();
$s = new Sensor();
$di = new Dispositivo();

$familia = $f->find();
$deficiente = $d->find();
$sensor = $s->find();
$dispositivo = $di->find();


Transaction::close();
