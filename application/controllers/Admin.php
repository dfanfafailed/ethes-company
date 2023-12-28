<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';

        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('template/admin_footer');
    }

    public function banner()
    {
        $data['judul'] = 'Banner Image';

        //Query mengambil table
        $data['banner_img'] = $this->db->get_where('banner_image')->result_array();

        // set rules
        $this->form_validation->set_rules('text', 'Text', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header');
            $this->load->view('template/admin_sidebar');
            $this->load->view('template/admin_navbar');
            $this->load->view('admin/banner_image/create_banner');
            $this->load->view('template/admin_footer');
        }else{

            $config['upload_path']      = './template/frontend/assets/img/hero-carousel';
            $config['allowed_types']    = 'png|jpg|jpege|gif';
            $config['max_size']         =  2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan',  '<div class="alert alert-danger" role="alert">
                Gambar Anda belum di uploa! </div>');
                redirect('admin/banner_image/data_banner');
            }else{
                $gambar     = $this->upload->data(); 
                $gambar     = $gambar['file_name'];
                $text       = $this->input->post('text', true);

            }

            $data = [
                'text' => $text
            ];

            //insert database
            $this->db->insert('banner_image', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            selamat, data anda sudah ditambahkan </div>');
            redirect('admin/banner_image/create_banner');
        }
    

    }
}

