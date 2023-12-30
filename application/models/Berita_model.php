<?php

class Berita_model extends CI_Model{

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
    }

    public function get_berita()
    {
        return $this->db->query("SELECT * FROM blog");    
    }

    public function getRecordById($id) {
        return $this->db->get_where('blog', ['id' => $id])->row_array();
    }

    public function create() {

        $judul      = $this->input->post('judul');
        $isi_blog   = $this->input->post('isi_blog');
        $created_by = $this->input->post('created_by');
        $image      = $this->input->post('image');
        $created_at = $this->input->post('created_at');

        $length = 6;
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = '';

        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }

        $file_name = $code;
        $config['upload_path'] = FCPATH.'/upload/img/berita/';;
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['file_name'] = $file_name;
        $config['overwrite'] = true;

        $this->upload->initialize($config);

        $this->upload->do_upload('image');
        $image = $this->upload->data();

    $data = [
        'judul'         => $judul,
        'isi_blog'      => $isi_blog,
        'created_by'    => $created_by,
        'image'         => $image['file_name'],
        'created_at'    => time()
    ];

    return $this->db->insert('blog', $data);
}


public function update($table, $id, $data) {
    $result = $this->db->where('id', $id)->update($table, $data);
    return $result;
}

public function hapus($berita, $id){

    $result = $this->db->delete($berita, ['id' => $id]);
    return $result;
}

public function berita() {
    $this->db->select('*');
    $this->db->from('blog');
    $this->db->order_by('created_at', 'desc');
    $this->db->limit(3);
    $query = $this->db->get(); 
    return $query->result();
}
}