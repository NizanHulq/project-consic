<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }



    public function cek_login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cek = $this->model('User_model')->cek_login($email, $password);
        var_dump($cek);

        // $hasil = $cek->fetch(PDO::FETCH_ASSOC);
        if ($cek > 0) {
            header('location:' . BASEURL . '/home');
        } else {
            // header('location:' . BASEURL . '/login');
            echo "<script>alert('Login Belum Berhasil, Silahkan Cek Kembali Email dan Password Anda');window.location='<?= BASEURL; ?>/login/'</script>";
        }
    }
}
