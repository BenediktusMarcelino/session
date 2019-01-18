<?php
class Muser extends CI_Model{

    public function login($username,$password){
		  $this->db->select('*');
		  $this->db->from('admin');
		  $this->db->where('username',$username);
		  $this->db->where('password',$password);

		  return $this->db->get()->num_rows();
	}
   public function tampil_data(){
      return $this->db->get('admin');
   }

	public function register($data){
		return $this->db->insert('admin',$data);
    }
    
    public function getDataByID($intID) {
        $cek = $this->db->get_where('admin',array('id' => $intID));
        return $cek->row_array();
     }
    
     public function delete($id){
        $this->db->where(array('id' => $id));
        $this->db->delete('admin');
     }
  
     public function edit($data){
         $this->db->where(array('id' => $data['id']));
         $this->db->update('admin', $data);  
     }	
}