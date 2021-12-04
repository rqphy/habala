<?php
session_start();

// Autoload
require 'Vendor/Core/SplClassLoader.php';
require_once 'Config/autoload.php';

$router = new \Vendor\Core\Router();
$router->getController();