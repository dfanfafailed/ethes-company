<?php

class Tentang_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_tentang()
    {
        
        return $this->db->query("SELECT * FROM tentang ");    
    }
    
    public function create() {

            $tentang = $this->input->post('tentang');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/tentang/';;
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'tentang' => $tentang,
            'image' => $image['file_name']
        ];

        return $this->db->insert('tentang', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('tentang', ['id_tentang' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id_tentang', $id)->update($table, $data);
		return $result;
    }


    public function hapus($tentang, $id){

		$result = $this->db->delete($tentang, ['id_tentang' => $id]);
		return $result;
    }
}