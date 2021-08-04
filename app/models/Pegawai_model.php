<?php

class Pegawai_model {
    private $table = 'tb_pegawai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPegawai()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllPegawaiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPegawai($data)
    {
        $query = "INSERT INTO " . $this->table .  
                  " VALUES
                  ('', :nip, :nama, :jabatan, :alamat)";
        $this->db->query($query);
        $this->db->bind('nip',$data['nip']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('jabatan',$data['jabatan']);
        $this->db->bind('alamat',$data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}