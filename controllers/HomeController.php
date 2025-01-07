<?php
namespace controllers;

class HomeController extends \core\Controller {
    public function indexAction() {
        $data = [
            'title' => 'Welcome',
            'message' => 'Welcome to your MVC application!'
        ];
        
        $this->render('index', $data);
    }
} 