<?php
    class Peoples extends CI_CONTROLLER {

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->library('pagination');
        }

        public function index() {
            $data['judul'] = 'List of Peoples';

            $this->load->model('Peoples_model', 'peoples');

            //library
            $this->load->library('pagination');

            //config
            $config['base_url'] = 'http://localhost/ci_web//peoples/index';
            $config['total_rows'] = $this->peoples->countAllPeoples();

            $config['per_page'] = 12;

            //styling
            $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
            $config['full_tag_close'] = '</ul></nav>';

            $config['link'] = 'first';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = 'last';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            
            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            
            $config['previous_link'] = '&laquo';
            $config['previous_tag_open'] = '<li class="page-item">';
            $config['previous_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');


            //initialize
            $this->pagination->initialize($config);


            $data['start'] = $this->uri->segment(3);
            $data['peoples'] = $this->peoples->getPeoples($config['per_page'],  $data['start']);
            
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/index', $data);
            $this->load->view('templates/footer');
        }

       
    }