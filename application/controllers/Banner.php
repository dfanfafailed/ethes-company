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


    public function hapus_banner($id) 
    {
        $this->Banner_model->hapus('banner_img',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data banner menu anda sudah di hapus! </div>');
        redirect('banner');
    }
}