<?php

class Add extends CI_Controller{

  function __construct(){
    parent::__construct();
      $this->load->model('m_admin');
    $this->load->helper('url');
    
  }
  
  function anti_xss($source)
  {
      $input = stripslashes(strip_tags(htmlspecialchars ($source,ENT_QUOTES)));
      return $input;
  }  

  function index(){

    $timestamp = $this->anti_xss($this->input->post('timestamp'));
    $id = $this->anti_xss($this->input->post('id'));
    $name = $this->anti_xss($this->input->post('name'));
    $phone = $this->anti_xss($this->input->post('phone'));
    $time = $this->anti_xss($this->input->post('time'));
    $number = $this->anti_xss($this->input->post('number'));
    $orderan = $this->anti_xss($this->input->post('orderan'));
    $event = $this->anti_xss($this->input->post('event'));
    $message = $this->anti_xss($this->input->post('message'));

    $data = array(
			'timestamp' => $timestamp,
      'id' => $id,
      'name' => $name,
      'phone' => $phone,
      'time' => $time,
      'number' => $number,
      'orderan' => $orderan,
      'event' => $event,
      'message' => $message,
      'status'=> 'belum'

			);
		$this->m_admin->input_data($data,'users');
		redirect('welcome');
  }
}
