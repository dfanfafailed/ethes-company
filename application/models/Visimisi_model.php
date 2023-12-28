<?php

class Visimisi_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_visimisi()
    {
        
        return $this->db->query("SELECT * FROM visi_misi ");    
    }
    
    public function create() {

            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/visi_misi/';;
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'visi' => $visi,
            'misi' => $misi,
            'image' => $image['file_name']
        ];

        return $this->db->insert('visi_misi', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('visi_misi', ['id' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id', $id)->update($table, $data);
		return $result;
    }


    public function hapus($visimisi, $id){

		$result = $this->db->delete($visimisi, ['id' => $id]);
		return $result;
    }
}