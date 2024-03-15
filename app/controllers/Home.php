<?php

class Home extends Controller{
    public function index() {
        $data = [
            'title' => 'Torindo Jaya Persada',
            'heroimg' => 'landingHero',
            'page' => 'index'
        ];
        $this->view('home/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About Torindo Jaya Persada',
            'heroimg' => 'aboutHero',
            'page' => 'about'
        ];
        $this->view('home/about', $data);
    }

    public function contact() {
        $data = [
            'title' => 'Contact Torindo Jaya Persada',
            'heroimg' => 'contactHero',
            'page' => 'contact'
        ];
        $this->view('home/contact', $data);
    }

    public function products() {
        $data = [
            'title' => 'Torindo Jaya Persada Products',
            'heroimg' => 'produkHero',
            'page' => 'products'
        ];
        $this->view('home/products', $data);
    }

    public function hr() {
        $data = [
            'title' => 'Torindo Jaya Persada HR Service',
            'heroimg' => 'recruitmentHero',
            'page' => 'recruitment'
        ];
        $this->view('home/recruitment', $data);
    }

    public function umrah() {
        $data = [
            'title' => 'Torindo Jaya Persada Umrah Traver & Service',
            'heroimg' => 'umrahHero',
            'page' => 'umrah'
        ];
        $this->view('home/umrah', $data);
    }
}