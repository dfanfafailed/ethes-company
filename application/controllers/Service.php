<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';

        $this->load->helper('url');
         // Fetch all services
        $data['services'] = $this->db->get('service')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/service/data_service', $data);
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
        $this->load->view('admin/service/create_service');
        $this->load->view('template/admin_footer');   
    }

    public function add_service()
	{
        $this->Service_model->create();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data pelayanan anda sudah ditambahkan! </div>');
        redirect('service');
    }


    
    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $service = $this->Service_model->getRecordById($id);
    
        if ($service) {
            // Load the edit view with the existing data
            $data['service'] = $service;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/service/edit_service', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
        $this->load->library('upload');

        $nama_layanan       = $this->input->post('nama_layanan');
        $deskripsi_layanan  = $this->input->post('deskripsi_layanan');
        $foto               = $this->input->post('foto');
    
      if (!empty($_FILES['foto']['name'])) {
                $config['upload_path'] = FCPATH . '/upload/img/';
                $config['allowed_types'] = 'jpeg|jpg|png|gif';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data();
                    $file = $foto['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                    redirect('service');
                }
            }

            if (isset($file)) {
                $this->db->set('foto', $file);
            }

            $this->db->set('nama_layanan', $nama_layanan);
            $this->db->set('deskripsi_layanan', $deskripsi_layanan);
            $this->db->where('id_service', $id);
            $this->db->update('service');
    
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
            role="alert"> 
            Data berhasil di edit! </div>');
            redirect('service');

            
    }
    
    public function hapus_service($id)
    {

        $this->Service_model->hapus('service',   $id);
        redirect('service');

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
            role="alert"> 
            Data pelayanan anda gagal di edit! </div>');
            redirect('distributor');

    }
}