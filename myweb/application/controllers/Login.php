<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
        public function index()
        {
        
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
        
        public function cek_login()
        {
            
            $this->load->model('m_login');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->m_login->cek($username,$password);
            if($cek->num_rows() == 1)
            {
                foreach ($cek->result() as $data){
                    $sess_data['id'] = $data->id;
                    $sess_data['username'] = $data->username;
                    $this->session->set_userdata($sess_data);
                }
            
        	redirect('user');
			
		}else{
			echo "<script>alert('username tidak terdaftar');history.go(-1)</script>";
		}
	}

        public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
        
}