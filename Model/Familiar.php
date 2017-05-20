<?php

spl_autoload_register(function($class){
    if(file_exists("{$class}.php")){
        require_once "{$class}.php";
        return true;
    }
});

class Familiar extends Pessoa{

    private $grauParentesco;
    private $email;
    private $login;
    private $senha;

    public function __construct() {}

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $val){
        $this->$attr = $val;
    }

    function getGrauParentesco() {
        return $this->grauParentesco;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function setGrauParentesco($grauParentesco) {
        $this->grauParentesco = $grauParentesco;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }




    public function find($cpf=0){
        if(empty($cpf)){
            $sql = "SELECT * FROM familiar";
            $conn = Transaction::get();
            $query = $conn->prepare($sql);

            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        else {
            $sql = "SELECT * FROM familiar WHERE cpf = :cpf";
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
                    $sql = "INSERT INTO familiar(nome, cpf, idade, login, senha, endereco, cidade, cep, telefone, celular, grauParentesco) "
                            . "VALUES (:nome, :cpf, :idade, :login, :senha, :endereco, :cidade, :cep, :telefone, :celular, :grauParentesco)";
                    $conn = Transaction::get();
                    $query = $conn->prepare($sql);
                    $query->bindValue(":nome", $this->nome); $query->bindValue(":cpf", $this->cpf); $query->bindValue(":idade", $this->idade);
                    $query->bindValue(":login", $this->login); $query->bindValue(":senha", $this->senha); $query->bindValue(":endereco", $this->endereco);
                    $query->bindValue(":cidade", $this->cidade); $query->bindValue(":cep", $this->cep); $query->bindValue(":telefone", $this->telefone);
                    $query->bindValue(":celular", $this->celular); $query->bindValue(":grauParentesco", $this->grauParentesco);
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
                $sql = "UPDATE familiar SET nome=:nome, idade=:idade, login=:login, senha=:senha, endereco=:endereco, cidade=:cidade,"
                        . " cep=:cep, telefone=:telefone, celular=:celular, grauParentesco=:grauParentesco WHERE cpf = :cpf";
                $conn = Transaction::get();
                $query = $conn->prepare($sql);
                $query->bindValue(":nome", $this->nome); $query->bindValue(":cpf", $this->cpf); $query->bindValue(":idade", $this->idade);
                $query->bindValue(":login", $this->login); $query->bindValue(":senha", $this->senha); $query->bindValue(":endereco", $this->endereco);
                $query->bindValue(":cidade", $this->cidade); $query->bindValue(":cep", $this->cep); $query->bindValue(":telefone", $this->telefone);
                $query->bindValue(":celular", $this->celular); $query->bindValue(":grauParentesco", $this->grauParentesco);
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
                $sql = "DELETE FROM familiar WHERE cpf=:cpf";
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

