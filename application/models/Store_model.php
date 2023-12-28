<?php

class Store_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_distributor()
    {
        return $this->db->query("SELECT * FROM offline_store");    
    }
    
    public function create() {

            $nama_store = $this->input->post('nama_store');
            $alamat_outlet = $this->input->post('alamat_outlet');
            $outlet = $this->input->post('outlet');
            $link_alamat = $this->input->post('link_alamat');
            $foto = $this->input->post('foto');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/offline/';;
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('foto');
            $foto = $this->upload->data();

        $data = [
            'nama_store' => $nama_store,
            'alamat_outlet' => $alamat_outlet,
            'outlet' => $outlet,
            'link_alamat' => $link_alamat,
            'foto' => $foto['file_name']
        ];

        return $this->db->insert('offline_store', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('offline_store', ['id_store' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id_store', $id)->update($table, $data);
		return $result;
    }

    public function hapus($store, $id){

		$result = $this->db->delete($store, ['id_store' => $id]);
		return $result;
    }
}