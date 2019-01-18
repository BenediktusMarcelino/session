<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
  		parent::__construct();
  		$this->load->model('m_Login');
	}

	public function index()
	{
		$this->load->view('v_Login');
	}

	public function login()
	{
      $username = $this->input->post('username');
      $password = $this->input->post('password');
	  if($this->m_Login->login($username, $password))
	  {
        $this->load->view('v_beranda');
	  }
	  else
	  {
        $this->load->view('v_Login');
      }
  }

	public function logout()
	{
    	$this->session->sess_destroy();
    	redirect('');
  	}
}