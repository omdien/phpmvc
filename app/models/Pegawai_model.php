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

    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=karimutu';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllPegawai()
    {
        //return $this ->peg;
        $this->stmt = $this->dbh->prepare('Select * from tb_r_pegawai');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}