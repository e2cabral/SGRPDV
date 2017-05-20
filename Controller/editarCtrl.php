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
$ob = new Objeto();
$res = new Residencia();


$familia = $f->find();
$deficiente = $d->find();
$sensor = $s->find();
$dispositivo = $di->find();
$objeto = $ob->find();
$residencia = $res->find();

Transaction::close();
