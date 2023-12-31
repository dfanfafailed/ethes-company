<?php

class Tampilan_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_tampilan()
    {
        
        return $this->db->query("SELECT * FROM tampilan");    
    }
    
    public function create() {

            $logo = $this->input->post('logo');
            $logo_text = $this->input->post('logo_text');
            $text = $this->input->post('text');
            $sub_text = $this->input->post('sub_text');
            $background = $this->input->post('background');


            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/tampilan/';;
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('logo', 'background' );
            $logo = $this->upload->data();
            $background = $this->upload->data();

        $data = [
            'logo' => $logo['file_name'],
            'logo_text' => $logo_text,
            'text' => $text,
            'sub_text' => $sub_text,
            'background' => $background['file_name'],
        ];

        return $this->db->insert('tampilan', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('service', ['id_service' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id_service', $id)->update($table, $data);
		return $result;
    }


    public function hapus($service, $id){

		$result = $this->db->delete($service, ['id_service' => $id]);
		return $result;
    }
}