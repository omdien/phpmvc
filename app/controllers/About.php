<?php

class About extends Controller{

    public function index ($nama = 'Didin Handiman', $pekerjaan = 'PNS', $umur = 46)
    {
        //echo "Hallo saya $nama, saya dalah seorang $pekerjaan";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'Halaman About';
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        //echo 'About/page';
        $data['judul'] = 'Halaman Page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
} 