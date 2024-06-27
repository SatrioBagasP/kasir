<?php

class Login_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekLogin($input)
    {
        $this->db->query('SELECT * FROM pegawai where id_pegawai=:id_pegawai AND password=:password');
        $this->db->bind('id_pegawai', $input['id_pegawai']);
        $this->db->bind('password', $input['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getUserData()
    {
        $this->db->query('SELECT * FROM pegawai where id_pegawai=:id_pegawai');
        $this->db->bind('id_pegawai', $_POST['id_pegawai']);
        $this->db->execute();
        return $this->db->single();
    }
}
