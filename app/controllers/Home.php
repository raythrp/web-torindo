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
            'heroimg' => 'productHero',
            'page' => 'products'
        ];
        $this->view('home/products', $data);
    }

    public function recruitment() {
        $data = [
            'title' => 'Torindo Jaya Persada Recruitment Service',
            'heroimg' => 'recruitmentHero'
        ];
        $this->view('home/recruitment', $data);
    }

    public function umrah() {
        $data = [
            'title' => 'Torindo Jaya Persada Umrah Traver & Service',
            'heroimg' => 'umrahHero'
        ];
        $this->view('home/umrah', $data);
    }
}