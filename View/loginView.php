<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView{

    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrarLogin($error = ""){
        $this->smarty->assign('titulo', 'Iniciar sesion');
        $this->smarty->assign('error', $error);
        $this->smarty->display('./templates/login.tpl');
    }

    function mostrarHome(){
        header("Location: ".BASE_URL."home");
    }
}