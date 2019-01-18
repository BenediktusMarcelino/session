<?php
class User extends CI_Controller{
    public function __construct()
	{
  		parent::__construct();
  		$this->load->model('Muser');
    }
    
    public function index(){
        session_start();
        if($_SESSION['status'] !="login"){
            header("location:User/browse");
        }
        //redirect ('User/browse');
    }

    public function browse(){
        $this->load->view('Vlogin');
    }

    public function beranda(){
        $this->load->view('v_beranda');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
	    if($this->Muser->login($username, $password)){
            session_start();
            $_SESSION['username'] = $username;
	        $_SESSION['status'] = "login";
	        header("location:beranda");
	    }else{
            $this->load->view('Vlogin');
        }
    }

    public function register(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('Vregister');
        }else{
            $data = array(
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->Muser->register($data);
            $this->load->view('Vlogin');
        }
    }
    public function edit(){
        $data['admin'] = $this->Muser->tampil_data()->result();
        $this->load->view('Vedit',$data);    
    }

    public function edit_Data($id){
        $data['admin'] = $this->Muser->tampil_data()->result();
        $this->load->view('Veditdetail',$admin);    
    }

    public function editdata($id){
        if($this->input->post('editAkun')) { 		
            $data = array(
               'id' => $this->input->post('id'),
               'email' => $this->input->post('email'),
               'username' => $this->input->post('username'),
               'password' => $this->input->post('password')
            );
            $this->Muser->edit($data);
            redirect('user/edit');
         } else {
            $data['admin'] = $this->Muser->getDataByID($id);
            $this->load->view('Veditdetail',$data);
         }
    }

    public function delete(){
        $data['admin'] = $this->Muser->tampil_data()->result();
        $this->load->view('Vdelete',$data);    
    }

    public function deletedata($id){
        $this->Muser->delete($id);
       $data['admin'] = $this->Muser->tampil_data()->result();
      $this->load->view('Vdelete',$data);   
    }

    public function logout(){
        //session_start();
        //session_unset();
        session_destroy();
        $this->load->view('Vlogin');
    }
}