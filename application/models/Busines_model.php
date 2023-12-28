<?php

class Busines_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_busines()
    {
        return $this->db->query("SELECT * FROM busines_unit");    
    }
    
    public function create() {

            $badan_hukum = $this->input->post('badan_hukum');
            $bisnis = $this->input->post('bisnis');
         
        $data = [
            'badan_hukum' => $badan_hukum,
            'bisnis' => $bisnis,
           
        ];

        return $this->db->insert('busines_unit', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('busines_unit', ['id' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id', $id)->update($table, $data);
		return $result;
    }

    public function hapus($busines, $id){

		$result = $this->db->delete($busines, ['id' => $id]);
		return $result;
    }
}