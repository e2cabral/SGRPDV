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
$o = new Objeto();
$r = new Residencia();

$f->delete(base64_decode(filter_input(INPUT_GET, 'idfam')));
$d->delete(base64_decode(filter_input(INPUT_GET, 'iddef')));
$s->delete(base64_decode(filter_input(INPUT_GET, 'idsen')));
$di->delete(base64_decode(filter_input(INPUT_GET, 'iddisp')));
$o->delete(base64_decode(filter_input(INPUT_GET, 'idob')));
$r->delete(base64_decode(filter_input(INPUT_GET, 'idres')));

header("Location: ../View/editar.php");



Transaction::close();

