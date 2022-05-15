<?php
require './core/Database.php';
require './models/BaseModel.php';
require './controllers/BaseController.php';
$listController = ['CategoryController', 'ContactController', 'OrderController', 'ProductController', 'CartController', 'NotFoundController', 'HomeController', 'UserController'];
ob_start();
session_start();
$controllerName = ucfirst(($_REQUEST['controller'] ?? 'home') . 'Controller');
if (!in_array($controllerName, $listController)) {
    $controllerName = 'NotFoundController';
}
$actionName = $_REQUEST['action'] ?? 'index';
require "./controllers/${controllerName}.php";
$objectController = new $controllerName;
$objectController->$actionName();
