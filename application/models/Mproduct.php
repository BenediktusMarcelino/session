<?php
   class Mproduct extends CI_Model{

      public function __construct(){
      $this->load->database();
      $this->load->helper('url');
      }
   
      public function tampil_data(){
         return $this->db->get('product');
      }

      public function getDataByID($intID) {
         $hasil = $this->db->get_where('product',array('id' => $intID));
         return $hasil->row_array();
      }
   
      public function add($data){
            return $this->db->insert('product', $data);
      }
   
      public function delete($id){
         $this->db->where(array('id' => $id));
         $this->db->delete('product');
      }
   
      public function edit($data){
         $this->db->where(array('id' => $data['id']));
         $this->db->update('product', $data);  
      }	
   } 
?> 