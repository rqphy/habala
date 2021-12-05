<?php
session_start();

// Autoload
// require 'Vendor/Core/SplClassLoader.php';
require_once './vendor/autoload.php';

$router = new \App\controller\Router\Router();
$router->getController();