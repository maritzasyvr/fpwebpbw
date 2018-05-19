<?php

class Newadminmenu extends CI_Controller
{

  function __construct()
    {
    	
		
    parent::__construct();
    $this->load->model('m_menu');
    } 

  function index()
  {
  	$data['menu'] = $this->m_menu->tampil_data()->result();
		$this->load->view('tables',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['konten'] = $this->m_menu->edit_data($where,'konten')->result();
    $this->load->view('v_editkonten',$data);
  }

  function update($id){
     $judul = $this->input->post('judul');
    $deskripsi = $this->input->post('deskripsi');
    $harga = $this->input->post('harga');
    $gambar = $this->input->post('gambar');
   
    $data = array(
			 'judul' => $judul,
      'deskripsi' => $deskripsi,
      'harga' => $harga,
      'gambar' => $gambar,

			);
    $where = array('id' => $id);

    $this->m_menu->update_data($where,$data,'konten');
    redirect('newadminmenu');
  }

  function hapus($id){
    // $data['crud_db'] = $this->m_admin->tampil_data()->result();
    // $this->load->view('indexadmin',$data);
  $where = array('id' => $id);
  $this->m_menu->hapus_data($where,'konten');
  redirect('newadminmenu');
  }
}