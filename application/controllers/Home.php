<?php

class Home extends CI_CONTROLLER {
    public function index($nama = ''){
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $this->load->view('home/index');
    }
}