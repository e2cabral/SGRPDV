<?php


class PortaDeAcesso {
    private $numeroPorta;
    private $tipoPorta;

    public function __construct(){}

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $val) {
        $this->$attr = $val;
    }

    function getNumeroPorta() {
        return $this->numeroPorta;
    }

    function getTipoPorta() {
        return $this->tipoPorta;
    }

    function setNumeroPorta($numeroPorta) {
        $this->numeroPorta = $numeroPorta;
    }

    function setTipoPorta($tipoPorta) {
        $this->tipoPorta = $tipoPorta;
    }


}
