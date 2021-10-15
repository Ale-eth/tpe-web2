<?php

class loginModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_bebidas;charset=utf8', 'root', '');
    }


    function getUsuario($usuario){
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE user = '$usuario'");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
        }
}
