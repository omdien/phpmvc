<?php
class Pegawai extends Controller {
    public function index()
    {
        $data['judul'] = "Daftar Pegawai";
        $data['peg'] = $this->model('Pegawai_model')->getAllPegawai();
        $this->view('templates/header',$data);
        $this->view('pegawai/index',$data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Pegawai";
        $data['peg'] = $this->model('Pegawai_model')->getAllPegawaiById($id);
        $this->view('templates/header',$data);
        $this->view('pegawai/detail',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Pegawai_model')->tambahDataPegawai($_POST)>0) 
        {
            header('Location : ' . BASEURL . '/pegawai');
            exit;
        }
    }
}