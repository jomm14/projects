<?php

class Dashboard extends Controller {

    public function __construct() {
        $this->postModel = $this->model('Post');
    }
    
    public function index() {
        $posts = $this->postModel->findAllPosts();
        $count = $this->postModel->countAllPosts();

        $data = [
            'posts' => $posts,
            'count' => $count
        ];

        $this->view('dashboard/index', $data);
    }
}