<?php

class Distributor_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_distributor()
    {
        return $this->db->query("SELECT * FROM distributor");    
    }
    
    public function create() {

            $distributor = $this->input->post('distributor');
            $produk = $this->input->post('produk');
            $tittle = $this->input->post('tittle');
            $link = $this->input->post('link');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/distributor/';;
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'distributor' => $distributor,
            'produk' => $produk,
            'tittle' => $tittle,
            'link' => $link,
            'image' => $image['file_name']
        ];

        return $this->db->insert('distributor', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('distributor', ['id_distributor' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id_distributor', $id)->update($table, $data);
		return $result;
    }

    public function hapus($distributor, $id){

		$result = $this->db->delete($distributor, ['id_distributor' => $id]);
		return $result;
    }
}