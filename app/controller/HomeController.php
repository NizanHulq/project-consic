<?php

class Home extends Controller
{
    public function index($judul = 'Home')
    {
        $data['judul'] = $judul;

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
