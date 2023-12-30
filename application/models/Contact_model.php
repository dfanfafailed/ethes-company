<?php

class Contact_model extends CI_Model{

    public function __construct()
     {
         
         parent::__construct();
         $this->load->helper(array('form', 'url'));
         
     }
 
     public function get_comment()
     {
         return $this->db->query("SELECT * FROM contact");    
     }
     
     public function create() {
 
             $address = $this->input->post('address');
             $email_us = $this->input->post('email_us');
             $number = $this->input->post('number_call');
             $maps = $this->input->post('maps');
 
         $data = [
             'address' => $address,
             'email_us' => $email_us,
             'number_call' => $number,
             'maps' => $maps,
         ];
 
         return $this->db->insert('contact', $data);
     }
 
     public function getRecordById($id) {
         return $this->db->get_where('contact', ['id' => $id])->row_array();
     }
 
     public function update($table, $id, $data) {
         $result = $this->db->where('id', $id)->update($table, $data);
         return $result;
     }
 
     public function hapus($contact, $id){
 
         $result = $this->db->delete($contact, ['id' => $id]);
         return $result;
     }

}