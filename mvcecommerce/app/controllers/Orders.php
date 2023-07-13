<?php

class Orders extends Controller {

    public function __construct() {
        //$this->userModel = $this->model('User');
    }
    
    public function index() {
        $data = [
            'title' => 'Orders'
        ];

        $this->view('orders/index', $data);
    }
}