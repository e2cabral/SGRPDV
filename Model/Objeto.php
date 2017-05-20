<?php


class Objeto {
    private $descricao;
    private $tipoObjeto;

    public function __construct(){}

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $val){
        $this->$attr = $val;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getTipoObjeto() {
        return $this->tipoObjeto;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setTipoObjeto($tipoObjeto) {
        $this->tipoObjeto = $tipoObjeto;
    }


}
