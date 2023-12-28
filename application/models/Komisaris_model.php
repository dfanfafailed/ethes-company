<?php

class Komisaris_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_komisaris()
    {
        return $this->db->query("SELECT * FROM komisaris");    
    }
    
    public function create() {

            $jabatan = $this->input->post('jabatan');
            $nama_komisaris = $this->input->post('nama_komisaris');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');
            $image = $this->input->post('image');

            $length = 6;
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
    
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }

            $file_name = $code;
            $config['upload_path'] = FCPATH.'/upload/img/komisaris/';;
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['file_name'] = $file_name;
            $config['overwrite'] = true;

            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $image = $this->upload->data();

        $data = [
            'jabatan' => $jabatan,
            'nama_komisaris' => $nama_komisaris,
            'alamat' => $alamat,
            'email' => $email,
            'telepon' => $telepon,
            'image' => $image['file_name']
        ];

        return $this->db->insert('komisaris', $data);
    }

    public function getRecordById($id) {
        return $this->db->get_where('komisaris', ['id' => $id])->row_array();
    }

    public function update($table, $id, $data) {
		$result = $this->db->where('id', $id)->update($table, $data);
		return $result;
    }

    public function hapus($komisaris, $id){

		$result = $this->db->delete($komisaris, ['id' => $id]);
		return $result;
    }
}