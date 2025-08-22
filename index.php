<?php
// index.php

$page = $_GET['page'] ?? 'home';

if (empty($page)) {
    // Default controller : HomeController
    $controllerName = 'HomeController';
    $methodName = 'index';
}else{
    $explodePage = explode('.', $page);
    $controllerName = ucfirst($explodePage[0]) . 'Controller';
    $methodName = $explodePage[1] ?? 'index';
}
$controllerFile = "app/Controllers/{$controllerName}.php";
if (file_exists($controllerFile)) {
    require_once 'core/Controller/Controller.php';
    require_once 'core/View/View.php';
    require_once 'core/helpers.php';
    require_once $controllerFile;

    $controller = new $controllerName();
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    }else{
        echo "La méthode [{$methodName}] non trouvée";
    }
} else {
    echo "Page non trouvée";
}
