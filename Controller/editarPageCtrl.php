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
$dispositivo = new Dispositivo();
$objeto = new Objeto();
$residencia = new Residencia();

$familia = $f->find(base64_decode(filter_input(INPUT_GET, 'id')));
$deficiente = $d->find(base64_decode(filter_input(INPUT_GET, 'id')));
$sensor = $s->find(base64_decode(filter_input(INPUT_GET, 'id')));
$disp = $dispositivo->find(base64_decode(filter_input(INPUT_GET, 'id')));
$ob = $objeto->find(base64_decode(filter_input(INPUT_GET, 'id')));
$res = $residencia->find(base64_decode(filter_input(INPUT_GET, 'id')));

//foreach($familia as $f){
//    echo $f->cpf;
//}

Transaction::close();
