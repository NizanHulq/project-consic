<?php

class Landing extends Controller
{
    public function index()
    {
        $data['judul'] = 'Landing Page';

        $this->view('templates/header', $data);
        $this->view('landing/index', $data);
        $this->view('templates/footer');
    }
}
