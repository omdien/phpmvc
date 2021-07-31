<?php

class Pegawai_model {
    // private $peg = [
    //    [
    //        "nama" => "M. Hanafi",
    //        "nip" => "196509161986011002",
    //        "email" => "mhanafi@gmail.com",
    //        "jabatan" => "Kepala"
    //    ],
    //    [
    //        "nama" => "Didin Handiman",
    //        "nip" => "197502102009121001",
    //        "email" => "didin.handiman@kkp.go.id",
    //        "jabatan" => "Staf"
    //    ]
    //    ];
    //

    //private $dbh; //database handler
    //private $stmt;

    //public function __construct()
    //{
        //data source name
        //$dsn = 'mysql:host=localhost;dbname=karimutu';

        //try {
        //    $this->dbh = new PDO($dsn, 'root', '');
        //} catch(PDOException $e) {
        //    die($e->getMessage());
        //}
    //}

    private $tabel = 'tb_r_pegawai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPegawai()
    {
        //return $this ->peg;
        
        //$this->stmt = $this->dbh->prepare('Select * from tb_r_pegawai');
        //$this->stmt->execute();
        //return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet();
    }

    public function getPegawaiById($nip_baru)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE nip_baru=:nip_baru');
        $this->db->bind('nip_baru',$nip_baru);
        return $this->db->single();
    }

}