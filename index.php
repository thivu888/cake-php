<?php
require './core/Database.php';
require './models/BaseModel.php';
require './controllers/BaseController.php';
$listController = ['CategoryController', 'ProductController', 'NotFoundController', 'HomeController'];
session_start();
$controllerName = ucfirst(($_REQUEST['controller'] ?? 'home') . 'Controller');
die($_REQUEST['controller']);
if (!in_array($controllerName, $listController)) {
    $controllerName = 'NotFoundController';
} 
$actionName = $_REQUEST['action'] ?? 'index';
require "./controllers/${controllerName}.php";

$objectController = new $controllerName;
$objectController->$actionName();
