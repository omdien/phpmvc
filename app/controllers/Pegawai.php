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
}