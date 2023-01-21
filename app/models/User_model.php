<?php

class User_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO users
                    VALUES
                    ('', :username, :email, :password)";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        if ($data['password'] != $data['confirm_pass']) {
            echo "<script>alert('Registrasi Belum Berhasil, Silahkan Cek Kembali Password dan Konfirmasi Password Anda');window.location='<?= BASEURL; ?>/login/'</script>";
            return false;
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cek_login($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $this->db->query($query);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        return $this->db->single();
    }
}
