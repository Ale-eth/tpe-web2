<?php

class bebidasModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_bebidas;charset=utf8' , 'root', '');
    }

    function getBebidas(){ 

        $query = $this->db->prepare("select * from bebidas");  
        $query->execute();
        $bebidas = $query->fetchAll(PDO::FETCH_OBJ);
        return $bebidas;                                  
    }

    function getCategorias(){
        $query = $this->db->prepare("select * from categorias");  
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;       
    }

    function getBebidasDeEstaCategoria($categoria){ 
        $query = $this->db->prepare("select * from bebidas WHERE categoria= '$categoria'");
        $query->execute();
        $bebidas = $query->fetchAll(PDO::FETCH_OBJ);
        return $bebidas;                                  
    }

    function getBebida($bebida){
        $query = $this->db->prepare("select * from bebidas WHERE tipo= '$bebida'");
        $query->execute();
        $bebida = $query->fetchAll(PDO::FETCH_OBJ);
        return $bebida;  
    }

    function insertBebida($tipo, $categoria, $precio_kg){
        $query = $this->db->prepare("INSERT INTO bebidas(tipo, categoria, precio_kg) VALUES  (?, ?, ?)");
        $query->execute(array($tipo, $categoria, $precio_kg));
    }

    function insertCategoria($categoria){
        $query = $this->db->prepare("insert into categorias (categoria) VALUES ('$categoria')");
        $query->execute(array($categoria));
    }
}