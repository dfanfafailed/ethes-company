<?php

class Budaya_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_budaya()
    {
        return $this->db->query("SELECT * FROM budaya");    
    }
    
    public function create() {

            $budaya = $this->input->post('budaya');
            $keterangan = $this->input->post('keterangan');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/budaya/';
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'budaya'    => $budaya,
            'keterangan'=> $keterangan,
            'image'     => $image['file_name']
        ];

        return $this->db->insert('budaya', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('budaya', ['id' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id', $id)->update($table, $data);
		return $result;
    }

    public function hapus($budaya, $id){

		$result = $this->db->delete($budaya, ['id' => $id]);
		return $result;
    }
}