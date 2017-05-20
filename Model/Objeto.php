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

    public function find($id=0){
        if(empty($id)){
            $sql = "SELECT * FROM objeto";
            $conn = Transaction::get();
            $query = $conn->prepare($sql);

            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        else {
            $sql = "SELECT * FROM objeto WHERE Id = :id";
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
                    $sql = "INSERT INTO objeto(descricao, tipoObjeto) VALUES (:descricao, :tipoObjeto)";
                    $conn = Transaction::get();
                    $query = $conn->prepare($sql);
                    $query->bindValue(":descricao", $this->descricao);
                    $query->bindValue(":tipoObjeto", $this->tipoObjeto);
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
                $sql = "UPDATE objeto SET descricao=:descricao, tipoObjeto=:tipoObjeto WHERE Id=:id";
                $conn = Transaction::get();
                $query = $conn->prepare($sql);
                $query->bindValue(":descricao", $this->descricao);
                $query->bindValue(":tipoObjeto", $this->tipoObjeto);
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
                $sql = "DELETE FROM objeto WHERE Id=:id";
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
