<?php


class ItemObjeto {
    private $qtde;

    public function __construct(){}

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $val){
        $this->$attr = $val;
    }

    function getQtde() {
        return $this->qtde;
    }

    function setQtde($qtde) {
        $this->qtde = $qtde;
    }


}
