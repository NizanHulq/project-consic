<?php

class Contact extends Controller
{
    public function index($judul = 'Contact Us')
    {
        $data['judul'] = $judul;

        $this->view('templates/header', $data);
        $this->view('contact/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // var_dump($_POST);
        if ($this->model('Contact_model')->tambahDataContact($_POST) > 0) {
            // header('Location: ' . BASEURL . '/contact');
            echo "<script>alert('Pesan Berhasil Terkirim');window.location='<?= BASEURL; ?>/login/'</script>";
            exit;
        }
    }
}
