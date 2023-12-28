<?php

class Service_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_service()
    {
        
        return $this->db->query("SELECT * FROM service ");    
    }
    
    public function create() {

            $nama_layanan = $this->input->post('nama_layanan');
            $deskripsi_layanan = $this->input->post('deskripsi_layanan');
            $foto = $this->input->post('foto');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/';;
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('foto');
            $foto = $this->upload->data();

        $data = [
            'nama_layanan' => $nama_layanan,
            'deskripsi_layanan' => $deskripsi_layanan,
            'foto' => $foto['file_name']
        ];

        return $this->db->insert('service', $data);
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