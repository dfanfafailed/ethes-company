<?php

class Sejarah_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_sejarah()
    {
        
        return $this->db->query("SELECT * FROM sejarah ");    
    }
    
    public function create() {

            $sejarah = $this->input->post('sejarah');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/sejarah/';;
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'sejarah' => $sejarah,
            'image' => $image['file_name']
        ];

        return $this->db->insert('sejarah', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('sejarah', ['id_sejarah' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id_sejarah', $id)->update($table, $data);
		return $result;
    }


    public function hapus($sejarah, $id){

		$result = $this->db->delete($sejarah, ['id_sejarah' => $id]);
		return $result;
    }
}