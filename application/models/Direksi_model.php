<?php

class Direksi_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_direksi()
    {
        return $this->db->query("SELECT * FROM direksi");    
    }
    
    public function create() {

            $jabatan = $this->input->post('jabatan');
            $nama_direksi = $this->input->post('nama_direksi');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');
            $foto = $this->input->post('foto');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/direksi/';;
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('foto');
            $foto = $this->upload->data();

        $data = [
            'jabatan' => $jabatan,
            'nama_direksi' => $nama_direksi,
            'alamat' => $alamat,
            'email' => $email,
            'telepon' => $telepon,
            'foto' => $foto['file_name']
        ];

        return $this->db->insert('direksi', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('direksi', ['id' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id', $id)->update($table, $data);
		return $result;
    }

    public function hapus($direksi, $id){

		$result = $this->db->delete($direksi, ['id' => $id]);
		return $result;
    }
}