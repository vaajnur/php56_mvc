<?php
namespace core;

class Model {
    protected $db;
    
    public function __construct() {
        $this->db = Database::getInstance();
    }
} 