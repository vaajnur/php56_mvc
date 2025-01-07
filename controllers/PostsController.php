<?php
namespace controllers;

class PostsController extends \core\Controller {
    private $postModel;
    
    public function __construct() {
        $this->postModel = new \models\Post();
    }
    
    public function indexAction() {
        $posts = $this->postModel->getAll();
        
        $data = [
            'title' => 'Blog Posts',
            'posts' => $posts
        ];
        
        $this->render('index', $data);
    }
    
    public function viewAction() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        // print_r($_GET);
        $post = $this->postModel->getById($id);
        
        if (!$post) {
            header("HTTP/1.0 404 Not Found");
            echo "Post not found";
            return;
        }
        
        $data = [
            'title' => $post['title'],
            'post' => $post
        ];
        
        $this->render('view', $data);
    }
} 