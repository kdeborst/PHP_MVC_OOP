<?php

class Pages extends Controller {
    public function __construct() {
    
    }

    public function index() {
        if(isLoggedIn()) {
            redirect('posts');
        }
        
        $data = [
            'title' => 'SightSeeing',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus aliquid accusamus nemo, nobis ad veniam eveniet consectetur eaque tempora magnam voluptatem omnis cum, laborum maiores voluptatibus facere molestias illo sequi!'
        ];
        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About Us',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus aliquid accusamus nemo, nobis ad veniam eveniet consectetur eaque tempora magnam voluptatem omnis cum, laborum maiores voluptatibus facere molestias illo sequi!'
        ];
        $this->view('pages/about', $data);
    }
}