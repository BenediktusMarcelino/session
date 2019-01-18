<?php
class m_Login extends CI_Model
{
	public function login($username,$password)
	{
		  $this->db->select('*');
		  $this->db->from('admin');
		  $this->db->where('username',$username);
		  $this->db->where('password',$password);

		  return $this->db->get()->num_rows();
	}

	public function register()
	{
		$data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
		
		return $this->db->insert('admin',$data);
	}
}