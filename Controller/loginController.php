<?php

require_once './Model/loginModel.php';
require_once './View/loginView.php';

class loginController {
    
    private $view;
    private $model;

    function __construct(){
        $this->view = new LoginView();
        $this->model =new loginModel();
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->mostrarLogin("Cerraste sesion");
    }

    function login() {
        $this->view->mostrarLogin();
    }

    function verificarLogin() {

        if (!empty($_POST['user']) && !empty($_POST['password'])) {
                    $user = $_POST['user'];
                    $password = $_POST['password'];
            
                    // Obtengo el usuario de la base de datos
                    $usuario = $this->model->getUsuario($user);

                    if ($usuario && password_verify($password, $usuario->password)){
                            session_start();
                            $_SESSION["user"] = $user;
                            $_SESSION["password"] = $password;

                            $this->view->mostrarHome();
                        } else {
                            $this->view->mostrarLogin("Acceso denegado");
                        }
        }
    }
}

