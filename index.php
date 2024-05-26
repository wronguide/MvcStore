<?php

define('PATH_SITE', $_SERVER['DOCUMENT_ROOT']);
session_start();
require_once PATH_SITE . '/config/autoload.php';

// Инициализация роутера
$router = new routes\Router();

// Определение текущего маршрута

$route = isset($_GET['route']) ? $_GET['route'] : 'home';

$router->handle($route);

