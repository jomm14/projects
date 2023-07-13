<?php

class Products extends Controller {

    public function __construct() {
        $this->postModel = $this->model('Post');
    }
    
    public function index() {
        $posts = $this->postModel->findAllPosts();

        $data = [
            'posts' => $posts
        ];
        // var_dump($data);
        $this->view('products/index', $data);
    }
}