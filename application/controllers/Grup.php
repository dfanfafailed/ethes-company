<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Strukturgrup_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['grup'] = $this->db->get('struktur_grup')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/grup/grup', $data);
        $this->load->view('template/admin_footer');
    }

    public function create_data() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';

        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/grup/grup_create', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_grup()
	{
        $this->Strukturgrup_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, struktur grup anda sudah ditambahkan! </div>');
        redirect('grup');
    }

    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $grup = $this->Strukturgrup_model->getRecordById($id);
    
        if ($grup) {
            // Load the edit view with the existing data
            $data['grup'] = $grup;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/grup/grup_edit', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        $this->load->library('upload');

            $keterangan = $this->input->post('keterangan');

            // Cek apakah ada file gambar yang diupload
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = FCPATH . '/upload/img/grup/';
                $config['allowed_types'] = 'jpeg|jpg|png|gif';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data();
                    $file = $image['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                    redirect('grup');
                }
            }

            // Update data hanya jika ada file gambar baru diupload
            if (isset($file)) {
                $this->db->set('image', $file);
            }

            $this->db->set('keterangan', $keterangan);
            $this->db->where('id', $id);
            $this->db->update('struktur_grup');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data struktur grup anda berhasil di edit!</div>');
            redirect('grup');        
    }

    public function hapus_grup($id) 
    {
        $this->Strukturgrup_model->hapus('struktur_grup',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data struktur grup anda sudah di hapus! </div>');
        redirect('grup');
    }
}