<?php
namespace core;

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        
        $viewFile = ROOT . '/views/' . strtolower(str_replace(['Controller', 'controllers', '\\'], '', get_class($this))) . '/' . $view . '.php';
        $layoutFile = ROOT . '/views/layouts/default.php';
        
        // var_dump($viewFile);
        if (file_exists($viewFile)) {
            ob_start();
            require $viewFile;
            $content = ob_get_clean();
            
            if (file_exists($layoutFile)) {
                require $layoutFile;
            } else {
                echo $content;
            }
        } else {
            throw new \Exception("View {$view} not found");
        }
    }
} 