<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tentang_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['tentang'] = $this->db->get('tentang')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/tentang/data_tentang', $data);
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
        $this->load->view('admin/tentang/create_tentang', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_tentang()
	{
        $this->Tentang_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, tentang anda sudah ditambahkan! </div>');
        redirect('tentang');
    }

    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $tentang = $this->Tentang_model->getRecordById($id);
    
        if ($tentang) {
            // Load the edit view with the existing data
            $data['tentang'] = $tentang;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/tentang/edit_tentang', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        $this->load->library('upload');

            $tentang = $this->input->post('tentang');

            // Cek apakah ada file gambar yang diupload
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = FCPATH . '/upload/img/tentang/';
                $config['allowed_types'] = 'jpeg|jpg|png|gif';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data();
                    $file = $image['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                    redirect('tentang');
                }
            }

            // Update data hanya jika ada file gambar baru diupload
            if (isset($file)) {
                $this->db->set('image', $file);
            }

            $this->db->set('tentang', $tentang);
            $this->db->where('id_tentang', $id);
            $this->db->update('tentang');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data tentang anda berhasil di edit!</div>');
            redirect('tentang');        
    }

    public function hapus_tentang($id) 
    {
        $this->Tentang_model->hapus('tentang',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data struktur tentang anda sudah di hapus! </div>');
        redirect('tentang');
    }

}