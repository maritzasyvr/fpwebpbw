<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');

	}

	function index(){
		$this->load->view('v_login');
	}

	    function anti_xss($source)
    {
        $input = stripslashes(strip_tags(htmlspecialchars ($source,ENT_QUOTES)));
        return $input;
    }

	function aksi_login(){
		$username = $this->anti_xss($this->input->post('username'));
		// $password = $this->input->post('password');
		$password = md5($this->anti_xss($this->input->post('password')));
		// $input = array(
		// 	'username' => $username,
		// 	'password' => $password
		// 	);

		$cek_login = $this->m_admin->login($username, $password);

		if($cek_login==true){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Welcome'));
	}
}
