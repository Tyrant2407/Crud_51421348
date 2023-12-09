<?php

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa(){
        $query = $this->db->get('tb_mhs');  // Produces: SELECT * FROM mytable
        return $query->result_array();
       // return $this->db->get('mahasiswa')->result_array(); 
    }

    public function tambahDataMahasiswa(){
        $data = [
            "nama" => $this->input->post("nama", true),//fungsi true untuk mengamankan data
            "npm" => $this->input->post("npm", true),
            "email" => $this->input->post("email", true),
            "jurusan" => $this->input->post("jurusan", true)
        ];
        
        $this->db->insert("tb_mhs", $data);
    }

    public function hapusDataMahasiswa($id){
        //$this->db->where("npm", $id);
        $this->db->delete("tb_mhs", ['id' => $id]);
    }
    public function getMahasiswaById($id){
        return $this->db->get_where("tb_mhs", ['id' => $id])->row_array();
    }
    public function ubahDataMahasiswa(){
        $data = [
            "nama" => $this->input->post("nama", true),//fungsi true untuk mengamankan data
            "npm" => $this->input->post("npm", true),
            "email" => $this->input->post("email", true),
            "jurusan" => $this->input->post("jurusan", true)
        ];
        
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_mhs', $data);
    }

    public function cariDataMahasiswa() {
        $keyword = $this->input->post('keyword', true); //true jika data masuk ke database
        $this->db->like('nama', $keyword);
        $this->db->or_like('npm', $keyword); // Menambahkan pencarian NPM
        return $this->db->get('tb_mhs')->result_array();
    }
}
