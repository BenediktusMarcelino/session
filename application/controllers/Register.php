<?php
class Register extends CI_Controller
{
	public function __construct()
	{
  		parent::__construct();
          $this->load->model('m_Login');
    }
    
    public function index()
	{
        $this->load->view('v_Register');
	}

	public function register()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('v_Register');
        }
        else
        {
            $this->m_Login->register();
            $this->load->view('v_Success');
        }
    }
}