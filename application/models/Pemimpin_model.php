<?php

class Pemimpin_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_sejarah()
    {
        return $this->db->query("SELECT * FROM pemimpin");    
    }
    
    public function create() {

            $nama = $this->input->post('nama');
            $tahun = $this->input->post('tahun');
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
            'nama' => $nama,
            'tahun' => $tahun,
            'foto' => $foto['file_name']
        ];

        return $this->db->insert('pemimpin', $data);
    }

    public function hapus($pemimpin, $id){

		$result = $this->db->delete($pemimpin, ['id_pemimpin' => $id]);
		return $result;
    }
}