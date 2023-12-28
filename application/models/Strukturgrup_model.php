<?php

class Strukturgrup_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_grup()
    {
        
        return $this->db->query("SELECT * FROM struktur_grup ");    
    }
    
    public function create() {

            $keterangan = $this->input->post('keterangan');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/grup/';;
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'keterangan' => $keterangan,
            'image' => $image['file_name']
        ];

        return $this->db->insert('struktur_grup', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('struktur_grup', ['id' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id', $id)->update($table, $data);
		return $result;
    }


    public function hapus($struktur_grup, $id){

		$result = $this->db->delete($struktur_grup, ['id' => $id]);
		return $result;
    }
}