<?php


class Dispositivo {
    private $descricao;
    private $serial;
    private $tipo;

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

    function getSerial() {
        return $this->serial;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setSerial($serial) {
        $this->serial = $serial;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function find($id=0){
        if(empty($id)){
            $sql = "SELECT * FROM dispositivo";
            $conn = Transaction::get();
            $query = $conn->prepare($sql);

            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        else {
            $sql = "SELECT * FROM dispositivo WHERE Id = :id";
            $conn = Transaction::get();
            $query = $conn->prepare($sql);

            $query->bindValue(':id', $id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    }

    public function save(){
        try {
            if(!empty($this)) {
                    $sql = "INSERT INTO dispositivo(serial, tipo, descricao) VALUES (:serial, :tipo, :descricao)";
                    $conn = Transaction::get();
                    $query = $conn->prepare($sql);
                    $query->bindValue(":serial", $this->serial);
                    $query->bindValue(":tipo", $this->tipo);
                    $query->bindValue(":descricao", $this->descricao);
                    $query->execute();
                    return $query->rowCount();
                }

            }
        catch(PDOException $e){
            echo $e->getMessage().'<br />';
            echo $e->getCode().'<br />';
        }
    }

    public function update($id){
        try {
            if(!empty($this)){
                $sql = "UPDATE dispositivo SET serial=:serial, tipo=:tipo, descricao=:descricao WHERE Id=:id";
                $conn = Transaction::get();
                $query = $conn->prepare($sql);
                $query->bindValue(":serial", $this->serial);
                $query->bindValue(":tipo", $this->tipo);
                $query->bindValue(":descricao", $this->descricao);
                $query->bindValue(":id", $id);
                $query->execute();
                return $query->rowCount();
            }
            }
        catch(PDOException $e){
            echo $e->getMessage().'<br />';
            echo $e->getCode().'<br />';
        }
    }
    public function delete($id){
        try {
            if(!empty($this)){
                $sql = "DELETE FROM dispositivo WHERE Id=:id";
                $conn = Transaction::get();
                $query = $conn->prepare($sql);

                $query->bindValue(":id", $id);
                $query->execute();
                return $query->rowCount();
            }
        }
        catch (PDOException $e) {
            $e->getMessage()."<br />";
        }
    }
}
