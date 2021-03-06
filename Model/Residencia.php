<?php


class Residencia {
    private $descricao;

    public function ___construct(){}

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $val){
        $this->$attr = $val;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    public function find($id=0){
        if(empty($id)){
            $sql = "SELECT * FROM residencia";
            $conn = Transaction::get();
            $query = $conn->prepare($sql);

            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        else {
            $sql = "SELECT * FROM residencia WHERE Id = :id";
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
                    $sql = "INSERT INTO residencia(descricao) VALUES (:descricao)";
                    $conn = Transaction::get();
                    $query = $conn->prepare($sql);
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
                $sql = "UPDATE residencia SET descricao=:descricao WHERE Id=:id";
                $conn = Transaction::get();
                $query = $conn->prepare($sql);
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
                $sql = "DELETE FROM residencia WHERE Id=:id";
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
