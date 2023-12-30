<?php

class Comment_model extends CI_Model{
    public function __construct()
     {
         
         parent::__construct();
         $this->load->helper(array('form', 'url'));
         
     }
 
     public function get_comment()
     {
         return $this->db->query("SELECT * FROM comment");    
     }
     
     public function create() {
 
             $name = $this->input->post('name');
             $email = $this->input->post('email');
             $subject = $this->input->post('subject');
             $message = $this->input->post('message');
 
         $data = [
             'name' => $name,
             'email' => $email,
             'subject' => $subject,
             'message' => $message,
         ];
 
         return $this->db->insert('comment', $data);
     }
 
     public function getRecordById($id) {
         return $this->db->get_where('comment', ['id' => $id])->row_array();
     }
 
     public function update($table, $id, $data) {
         $result = $this->db->where('id', $id)->update($table, $data);
         return $result;
     }
 
     public function hapus($comment, $id){
 
         $result = $this->db->delete($comment, ['id' => $id]);
         return $result;
     }
 
 }
