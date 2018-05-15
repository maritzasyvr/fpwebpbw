<?php

class Add extends CI_Controller{

  function __construct(){
    parent::__construct();
      $this->load->model('m_admin');
    $this->load->helper('url');
    
  }
  

  function index(){

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
