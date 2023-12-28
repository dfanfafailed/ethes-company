<?php

class Plan_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_plan()
    {
        return $this->db->query("SELECT * FROM plan");    
    }
    
    public function create() {

            $tahun = $this->input->post('tahun');
            $rencana = $this->input->post('rencana');
         
            $data = [
                'tahun' => $tahun,
                'rencana' => $rencana,
            
            ];

        return $this->db->insert('plan', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('plan', ['id' => $id])->row_array();
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