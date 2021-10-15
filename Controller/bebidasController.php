<?php

require_once './Model/bebidasModel.php';
require_once './View/bebidasView.php';
require_once "./Helpers/AuthHelper.php";

class bebidasController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new bebidasModel();
        $this->view = new bebidasView();
        $this->authHelper = new AuthHelper();
    }


    public function home(){  
        $this->view->home();
    }

    public function showBebidas(){
        $bebidas = $this->model->getBebidas();
        $this->view->mostrarBebidas($bebidas);
    }

    public function showCategorias(){
        $categorias = $this->model->getCategorias();
        $this->view->mostrarCategorias($categorias);
    }

    public function showBebidasDeEstaCategoria($categoria){
        $bebidas = $this->model->getBebidasDeEstaCategoria($categoria);
        $this->view->mostrarBebidasDeEstaCategoria($bebidas);
    }

    public function showBebida($bebida){
        $bebida = $this->model->getBebida($bebida);
        $this->view->mostrarBebida($bebida);
    }

    public function crearBebida(){
        $this->authHelper->checkLoggedIn();
        $this->model->insertBebida($_POST['tipo'], $_POST['categoria'], $_POST['precio_kg']);
        $this->view->home();
    }

    public function crearCategoria($categoria){
        $this->authHelper->checkLoggedIn();
        $this->model->insertCategoria($_POST['categoria']);
        $this->view->home();
    }

}


