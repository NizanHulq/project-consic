<?php

class Contact_model
{
    private $table = 'contact';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }



    public function tambahDataContact($data)
    {
        $query = "INSERT INTO contact
                    VALUES
                    ('', :fullname, :email, :phone, :subject, :message)";

        $this->db->query($query);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('subject', $data['subject']);
        $this->db->bind('message', $data['message']);


        $this->db->execute();

        return $this->db->rowCount();
    }
}
