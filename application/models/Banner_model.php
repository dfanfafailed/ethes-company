<?php

class Banner_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_banner()
    {
        return $this->db->query("SELECT * FROM banner_img");    
    }
    
    public function create() {

            $text = $this->input->post('text');
            $sub = $this->input->post('sub');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/banner/';;
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'text' => $text,
            'sub' => $sub,
            'image' => $image['file_name']
        ];

        return $this->db->insert('banner_img', $data);
    }

    public function hapus($banner, $id){

		$result = $this->db->delete($banner, ['id' => $id]);
		return $result;
    }
}