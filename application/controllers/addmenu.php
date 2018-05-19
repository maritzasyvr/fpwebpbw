<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Addmenu extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->helper(array('form', 'url'));
    }

    public function input(){
      $this->load->view('v_addmenu');
    }
    public function proses_input(){
      //membuat konfigurasi
      $config = [
        'upload_path' => './asset/images/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 10000, 'max_width' => 10000,
        'max_height' => 10000
      ];
      echo $this->input->post('nama_gambar');
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan 
          echo $error['error'];
          //$this->load->view('v_addmenu', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = [
            'gambar' => set_value('nama_gambar'),
           'judul' => set_value('judul'),
           'deskripsi' => set_value('deskripsi'),
           'harga' => set_value('harga')
         ];
          $this->m_menu->input_data($data,'konten'); //memasukan data ke database
          redirect('newadminmenu'); //mengalihkan halaman

      }
  }
}