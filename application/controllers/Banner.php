<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Banner_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';

        $data['banner'] = $this->db->get('banner_img')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/banner_image/data_banner', $data);
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
        $this->load->view('admin/banner_image/create_banner');
        $this->load->view('template/admin_footer');   
    }

    public function add_banner()
	{
        $this->Banner_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data banner menu anda sudah ditambahkan! </div>');
        redirect('banner');
    }


    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $banner = $this->Banner_model->getRecordById($id);
    
        if ($banner) {
            // Load the edit view with the existing data
            $data['banner'] = $banner;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/banner/banner_edit', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        $this->load->library('upload');


            // Cek apakah ada file gambar yang diupload
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = FCPATH . '/upload/img/banner/';
                $config['allowed_types'] = 'jpeg|jpg|png|gif';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data();
                    $file = $image['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                    redirect('banner');
                }
            }

            // Update data hanya jika ada file gambar baru diupload
            if (isset($file)) {
                $this->db->set('image', $file);
            }

            $this->db->where('id_distributor', $id);
            $this->db->update('distributor');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data distributor anda berhasil di edit!</div>');
            redirect('distributor');

        
    }

    public function hapus_banner($id) 
    {
        $this->Banner_model->hapus('banner_img',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data banner menu anda sudah di hapus! </div>');
        redirect('banner');
    }
}