<?php

class Home extends Controller{
    public function index() {
        $data = [
            'title' => 'Torindo Jaya Persada'
        ];
        $this->view('home/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About Torindo Jaya Persada'
        ];
        $this->view('home/about', $data);
    }

    public function contact() {
        $data = [
            'title' => 'Contact Torindo Jaya Persada'
        ];
        $this->view('home/contact', $data);
    }

    public function products() {
        $data = [
            'title' => 'Torindo Jaya Persada Products'
        ];
        $this->view('home/products', $data);
    }

    public function recruitment() {
        $data = [
            'title' => 'Torindo Jaya Persada Recruitment Service'
        ];
        $this->view('home/recruitment', $data);
    }

    public function umrah() {
        $data = [
            'title' => 'Torindo Jaya Persada Umrah Traver & Service'
        ];
        $this->view('home/umrah', $data);
    }
}