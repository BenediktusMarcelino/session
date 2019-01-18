<?php 
   class Product extends CI_Controller{
 
      public function __construct(){
         parent::__construct();		
         $this->load->model('Mproduct');
         $this->load->helper('url');
         $this->load->helper('form');
         $this->load->library('form_validation');
      }
    
      public function index(){
         redirect('Product/browse');
      }

      public function browse(){
         $data['product'] = $this->Mproduct->tampil_data()->result();
         $this->load->view('Product_view',$data);
      }
    
      public function add(){
         
         $this->form_validation->set_rules('kode','kode','required');
         $this->form_validation->set_rules('nama','nama','required');
         $this->form_validation->set_rules('harga','harga','required');

         if($this->form_validation->run() === FALSE)
         {
            $this->load->view('Product_add');
         }
         else
         {
            $data = array(
               'kode' => $this->input->post('kode'),
               'nama' => $this->input->post('nama'),
               'harga' => $this->input->post('harga')
            );
            $this->Mproduct->add($data);
            redirect('Product/browse');
         }
      }
    
      public function delete($id){
         $this->Mproduct->delete($id);
         redirect('Product/browse');
      }
    
      public function edit($id){
         if($this->input->post('editProduct')) { 		
            $data = array(
               'id' => $this->input->post('id'),
               'kode' => $this->input->post('kode'),
               'nama' => $this->input->post('nama'),
               'harga' => $this->input->post('harga')
            );
            $this->Mproduct->edit($data);
            redirect('product');
         } else {
            $data['product'] = $this->Mproduct->getDataByID($id);
            $this->load->view('Product_edit',$data);
         }
      }
   }
?>