<?php

class Organisasi_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_organisasi()
    {
        
        return $this->db->query("SELECT * FROM organisasi ");    
    }
    
    public function create() {

            $nama_struktur = $this->input->post('nama_struktur');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/organisasi/';;
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'nama_struktur' => $nama_struktur,
            'image' => $image['file_name']
        ];

        return $this->db->insert('organisasi', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('organisasi', ['id' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id', $id)->update($table, $data);
		return $result;
    }


    public function hapus($organisasi, $id){

		$result = $this->db->delete($organisasi, ['id' => $id]);
		return $result;
    }
}