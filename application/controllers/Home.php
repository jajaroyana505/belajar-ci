<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('siswa_model');
      
   }

   public function index()

   {
      $this->load->model('siswa_model');
      $data['siswa'] = $this->siswa_model->getAll();
      $this->load->view('home', $data);
   }

   public function form()
   {
      $this->load->view('form_tambah_siswa');
   }

   public function hapus($id)
   {
      echo "hapus dengang id $id";
   }

   public function detail($id)
   {
      echo "detail dengang id $id";
   }

   public function simpan()
   {
      $this->load->model('siswa_model');
      $this->siswa_model->create();
      redirect(base_url());
   }
}
