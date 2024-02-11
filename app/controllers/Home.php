<?php

class Home extends Controller{
    public function index() {
        $this->view('home/index');
    }

    public function about() {
        $this->view('home/about');
    }

    public function contact() {
        $this->view('home/contact');
    }

    public function products() {
        $this->view('home/products');
    }

    public function recruitment() {
        $this->view('home/recruitment');
    }

    public function umrah() {
        $this->view('home/umrah');
    }
}