<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class bebidasView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function home(){
        $this->smarty->display('templates/home.tpl');
    }

    function mostrarBebidas($bebidas){
        $this->smarty->assign('bebidas', $bebidas);
        $this->smarty->display('templates/listaBebidas.tpl');
    }

    function mostrarCategorias($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/categoriasBebidas.tpl');
    }

    function mostrarBebidasDeEstaCategoria($bebidas){
        $this->smarty->assign('bebidas', $bebidas);
        $this->smarty->display('templates/categoriaBebidas.tpl');
    }

    function mostrarBebida($bebida){
        $this->smarty->assign('bebida', $bebida);
        $this->smarty->display('templates/bebidaBebidas.tpl');
    }
}