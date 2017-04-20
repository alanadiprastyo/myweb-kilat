<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		//$this->load->model('m_user');
		if (!$this->session->userdata('username')) {
			redirect('login');
		}

	}

	public function index()
	{
                $data['username'] = $this->session->userdata('username');
		$this->load->view('user/header');
		$this->load->view('user/home',$data);
		$this->load->view('user/footer');
	}

	
}
