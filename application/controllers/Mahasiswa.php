<?php
    class Mahasiswa extends CI_CONTROLLER {
        //memanggil database untuk semua method
        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('Mahasiswa_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index() {
            //$this->load->database(); jika hanya untuk satu method 1 db
            // $this->load->model('Mahasiswa_model');
            //ar_dump(base_url());
            //var_dump(site_url());
            $data['judul'] = 'Daftar Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
            if ($this->input->post('keyword')) {
                $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
            }
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('templates/footer');
        }

        public function tambah() {
            $data['judul'] = 'Form Tambah Data Mahasiswa';
            $data['jurusan'] = ['Teknik Informatika', 'bisnis digital', 'komunikasi', 
                                'Ekonomi', 'Sistem Informasi'];

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('mahasiswa/tambah');
                $this->load->view('templates/footer');
            } else{
                $this->Mahasiswa_model->tambahDataMahasiswa();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('mahasiswa');
                
            }
        }

        public function hapus($id) {
            $this->Mahasiswa_model->hapusDataMahasiswa($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('mahasiswa');
        }

        // public function hapusDataMahasiswa($id) {
        //     $this->db->where('id', $id);
        //     $this->db->delete('mahasiswa');
        // }

        public function detail($id) {
            $data['judul'] = 'Daftar Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id); 
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/detail', $data);
            $this->load->view('templates/footer');
        }

        public function ubah($id) {
            $data['judul'] = 'Form Ubah Data Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id); 
            $data['jurusan'] = ['Teknik Informatika', 'bisnis digital', 'komunikasi', 
                                'Ekonomi', 'Sistem Informasi'];

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('mahasiswa/ubah', $data);
                $this->load->view('templates/footer');
            } else{
                $this->Mahasiswa_model->ubahDataMahasiswa();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('mahasiswa');
                
            }
        }
    }
?>