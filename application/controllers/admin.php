<?php

class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
      $this->load->model('m_admin');
    $this->load->helper('url');
    if($this->session->userdata('status') != "login"){ 
      redirect(base_url("login")); 
    } 
  }
  

  function index(){

  
    $data['crud_db'] = $this->m_admin->tampil_data()->result();
    $this->load->view('indexadmin',$data);
  }

  function export(){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Report.xls");
    

    $data['crud_db'] = $this->m_admin->tampil_data()->result();
    $this->load->view('indexadmin',$data);
 }

  function edit($id){
    $where = array('id' => $id);
    $data['crud_db'] = $this->m_admin->edit_data($where,'users')->result();
    $this->load->view('v_edit',$data);
  }

  function update(){
     $timestamp = $this->input->post('timestamp');
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $phone = $this->input->post('phone');
    $time = $this->input->post('time');
    $number = $this->input->post('number');
    $orderan = $this->input->post('orderan');
    $event = $this->input->post('event');
    $message = $this->input->post('message');

    $data = array(
			 'timestamp' => $timestamp,
      'id' => $id,
      'name' => $name,
      'phone' => $phone,
      'time' => $time,
      'number' => $number,
      'orderan' => $orderan,
      'event' => $event,
      'message' => $message

			);

    $where = array('id' => $id);

    $this->m_admin->update_data($where,$data,'users');
    redirect('admin');
  }

  function hapus($id){
  $where = array('id' => $id);
  $this->m_admin->hapus_data($where,'users');
  redirect('admin/index');
  }

  function tambah_aksi(){
		$timestamp = $this->input->post('timestamp');
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $phone = $this->input->post('phone');
    $time = $this->input->post('time');
    $number = $this->input->post('number');
    $orderan = $this->input->post('orderan');
    $event = $this->input->post('event');
    $message = $this->input->post('message');

    $data = array(
			'timestamp' => $timestamp,
      'id' => $id,
      'name' => $name,
      'phone' => $phone,
      'time' => $time,
      'number' => $number,
      'orderan' => $orderan,
      'event' => $event,
      'message' => $message

			);
		$this->m_admin->input_data($data,'users');
		redirect('welcome');
	}
}
