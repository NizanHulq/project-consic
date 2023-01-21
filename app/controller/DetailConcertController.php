<?php

class DetailConcert extends Controller
{
    public function index($judul = 'Detail')
    {
        $data['judul'] = $judul;

        $this->view('templates/header', $data);
        $this->view('detailConcert/index', $data);
        $this->view('templates/footer');
    }
}
