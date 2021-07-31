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
    
    public function detail($nip_baru)
    {
        $data['judul'] = "Detail Pegawai";
        $data['peg'] = $this->model('Pegawai_model')->getPegawaiById($nip_baru);
        $this->view('templates/header',$data);
        $this->view('pegawai/detail',$data);
        $this->view('templates/footer');
    }
}