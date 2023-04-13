<?php

class Siswa_model extends CI_Model{
    public function create()
    {
        $data =[
             "nama" => $this->input->post('nama'),
             "jk" =>$this->input->post('jenis_kelamin'),
             "nama_ayah"=>$this->input->post('nama_ayah'),
             "nama_ibu"=>$this->input->post('nama_ibu'),
             "alamat"=>$this->input->post('alamat'),
            ];

        return $this->db->insert('siswa',$data);
        
        
    }
    public function getAll()
    {
        return $this->db->get("siswa")->result_object();
    }
}
