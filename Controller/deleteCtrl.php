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

//echo filter_input(INPUT_GET, 'id');
//echo base64_decode(filter_input(INPUT_GET, 'id'));
//$fam = $f->find(base64_decode(filter_input(INPUT_GET, 'id')));
//$def = $d->find(base64_decode(filter_input(INPUT_GET, 'id')));

$f->delete(base64_decode(filter_input(INPUT_GET, 'id')));
$d->delete(base64_decode(filter_input(INPUT_GET, 'id')));
$s->delete(base64_decode(filter_input(INPUT_GET, 'id')));

header("Location: ../View/editar.php");

//var_dump($fam[0]->cpf);
//var_dump($def[0]->cpf);

//if($fam[0]->cpf == base64_decode(filter_input(INPUT_GET, 'id'))){
//
//    $f->delete(base64_decode(filter_input(INPUT_GET, 'id')));
//
//    //header("Location: ../View/editar.php");
//    //echo "Passou";
//}
//
//if($def[0]->cpf == base64_decode(filter_input(INPUT_GET, 'id'))){
//
//    $d->delete(base64_decode(filter_input(INPUT_GET, 'id')));
//
//    //header("Location: ../View/editar.php");
//    var_dump($d);
//}

Transaction::close();

