<?php
define('ROOT', dirname(__DIR__));
require_once ROOT . '/config/config.php';

// Simple autoloader
spl_autoload_register(function($className) {
    $file = ROOT . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Initialize Router
$router = new core\Router();

// print_r($_REQUEST);

// Add routes
$router->addRoute('/', ['controller' => 'Home', 'action' => 'index']);
$router->addRoute('/posts', ['controller' => 'Posts', 'action' => 'index']);
$router->addRoute('/posts/view', ['controller' => 'Posts', 'action' => 'view']);

// Process the request
$router->dispatch(); 