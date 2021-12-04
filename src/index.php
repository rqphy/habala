<?php
session_start();

// Autoload
// require 'Vendor/Core/SplClassLoader.php';
require_once './vendor/autoload.php';

$router = new \App\Controller\Router\Router();
$router->getController();