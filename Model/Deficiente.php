<?php

spl_autoload_register(function($class){
    if(file_exists("{$class}.php")){
        require_once "{$class}.php";
        return true;
    }
});

class Deficiente extends Pessoa {

    private $grauDeficiencia;

    public function __construct(){}

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $val){
        $this->$attr = $val;
    }

    public function getGrauDeficiencia() {
        return $this->grauDeficiencia;
    }

    public function setGrauDeficiencia($grauDeficiencia) {
        $this->grauDeficiencia = $grauDeficiencia;
    }

    public function find($cpf=0){
        if(empty($cpf)){
            $sql = "SELECT * FROM deficiente";
            $conn = Transaction::get();
            $query = $conn->prepare($sql);

            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        else {
            $sql = "SELECT * FROM deficiente WHERE cpf = :cpf";
            $conn = Transaction::get();
            $query = $conn->prepare($sql);

            $query->bindValue(':cpf', $cpf);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    }

    public function save(){
        try {
            if(!empty($this)) {
                    $sql = "INSERT INTO deficiente(nome, cpf, idade, endereco, cidade, cep, telefone, celular, grauDeficiencia) "
                            . "VALUES (:nome, :cpf, :idade, :endereco, :cidade, :cep, :telefone, :celular, :grauDeficiencia)";
                    $conn = Transaction::get();
                    $query = $conn->prepare($sql);
                    $query->bindValue(":nome", $this->nome); $query->bindValue(":cpf", $this->cpf); $query->bindValue(":idade", $this->idade);
                    $query->bindValue(":endereco", $this->endereco);
                    $query->bindValue(":cidade", $this->cidade); $query->bindValue(":cep", $this->cep); $query->bindValue(":telefone", $this->telefone);
                    $query->bindValue(":celular", $this->celular); $query->bindValue(":grauDeficiencia", $this->grauDeficiencia);

                    $query->execute();
                    return $query->rowCount();
                }

            }
        catch(PDOException $e){
            echo $e->getMessage().'<br />';
            echo $e->getCode().'<br />';
        }
    }

    public function update(){
        try {
            if(!empty($this)){
                $sql = "UPDATE deficiente SET nome=:nome, idade=:idade, endereco=:endereco, cidade=:cidade,"
                        . " cep=:cep, telefone=:telefone, celular=:celular, grauDeficiencia=:grauDeficiencia WHERE cpf = :cpf";
                $conn = Transaction::get();
                $query = $conn->prepare($sql);
                $query->bindValue(":nome", $this->nome); $query->bindValue(":cpf", $this->cpf); $query->bindValue(":idade", $this->idade);
                $query->bindValue(":endereco", $this->endereco);
                $query->bindValue(":cidade", $this->cidade); $query->bindValue(":cep", $this->cep); $query->bindValue(":telefone", $this->telefone);
                $query->bindValue(":celular", $this->celular); $query->bindValue(":grauDeficiencia", $this->grauDeficiencia);
                //$query->bindValue(":login", $this->login); $query->bindValue(":senha", $this->senha);

                $query->execute();
                return $query->rowCount();
            }
            }
        catch(PDOException $e){
            echo $e->getMessage().'<br />';
            echo $e->getCode().'<br />';
        }
    }

    public function delete($cpf){
        try {
            if(!empty($this)){
                $sql = "DELETE FROM deficiente WHERE cpf=:cpf";
                $conn = Transaction::get();
                $query = $conn->prepare($sql);

                $query->bindValue(":cpf", $cpf);
                $query->execute();
                return $query->rowCount();
            }
        }
        catch (PDOException $e) {
            $e->getMessage()."<br />";
        }
    }
}
