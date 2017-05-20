<?php

spl_autoload_register(function($class) {
    if (file_exists("{$class}.php")) {
        require_once "{$class}.php";
    return true;
}
});

class Session {

    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($attr, $val) {
        $this->$attr = $val;
    }

    public function iniSession($login, $senha=0) {
        //$sql = "SELECT * FROM familiar WHERE login = :login";
        $sql = "SELECT * FROM familiar WHERE login=:login AND senha=:senha";
        $conn = Transaction::get();
        $query = $conn->prepare($sql);

        $query->bindValue(':login', $login);
        $query->bindValue(':senha', $senha);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
//        $session = $query->fetchAll(PDO::FETCH_OBJ);
//        if (!empty($s)) {
//            $_SESSION['login'] = $s[0]->login;
//            $_SESSION['senha'] = $s[0]->senha;
//            $_SESSION['cpf'] = $s[0]->cpf;
//            //echo $_SESSION['login'];
//            header('Location: ../View/home.php');
//
//        } else {
//        //                unset($_SESSION['login']);
//        //                unset($_SESSION['senha']);
//        //                unset($_SESSION['cpf']);
//        header('Location: ./../index.php');

    }
}
