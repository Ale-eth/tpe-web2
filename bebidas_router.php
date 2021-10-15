<?php

require_once './Controller/bebidasController.php';
require_once './Controller/loginController.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = ''; 
}

$params = explode('/', $action);



$controller = new bebidasController();

$loginController = new LoginController();


switch ($params[0]) {
    case 'login': 
        $loginController->login();
        break;
    case 'verify': 
        $loginController->verificarLogin(); 
        break;
    case 'logout': 
        $loginController->logout(); 
        break;
    case 'home': 
        $controller->home();
        break;
    case 'completo': 
        $controller->showBebidas();
        break;
    case 'categorias':
        $controller->showCategorias();
        break;
    case 'categoria':
        $controller->showBebidasDeEstaCategoria($params[1]);
        break;
    case 'bebida':
        $controller->showBebida($params[1]);
        break;
    case 'crearBebida':
        $controller->crearBebida();
        break;
    case 'crearCategoria':
        $controller->crearCategoria();
        break;
    default:
        $loginController->login();
        break;
}



/*
$clave ='usuario';
   echo password_hash($clave,PASSWORD_BCRYPT);
*/







