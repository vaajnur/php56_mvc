<?php
namespace core;

class Router {
    private $routes = [];
    
    public function addRoute($url, $params = []) {
        $this->routes[$url] = $params;
    }
    
    public function dispatch() {
        // $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
        $url = strtok($_SERVER["REQUEST_URI"], '?');
        // print_r($_SERVER);

        // echo $url;
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url]['controller'] . 'Controller';
            $action = $this->routes[$url]['action'] . 'Action';
            
            $controllerClass = 'controllers\\' . $controller;
            if (class_exists($controllerClass)) {
                $controllerInstance = new $controllerClass();
                if (method_exists($controllerInstance, $action)) {
                    $controllerInstance->$action();
                } else {
                    throw new \Exception("Action {$action} not found");
                }
            } else {
                throw new \Exception("Controller {$controller} not found");
            }
        } else {
            // header("HTTP/1.0 404 Not Found");
            echo "Page not found";
        }
    }
} 