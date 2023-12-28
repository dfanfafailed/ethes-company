<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budaya extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Budaya_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['budaya '] = $this->db->get('budaya')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/budaya/budaya', $data);
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
        $this->load->view('admin/budaya/budaya_create', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_budaya()
	{
        $this->Budaya_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data busines unit anda sudah ditambahkan! </div>');
        redirect('budaya');
    }

  


    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $distributor = $this->Distributor_model->getRecordById($id);
    
        if ($distributor) {
            // Load the edit view with the existing data
            $data['distributor'] = $distributor;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/budaya/budaya_edit', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
        $budaya      = $this->input->post('budaya');
        $keterangan  = $this->input->post('keterangan');
        $icon        = $this->input->post('icon');
        $image       = $this->input->post('image');
    
        
    
        // Configuration for image upload
        $config['upload_path'] = FCPATH . '/upload/img/budaya/';
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        // You may want to set a new file name for the updated image
        // $config['file_name'] = $new_file_name; 
    
        $this->upload->initialize($config);
    
        $this->upload->do_upload('image');
            // If the upload is successful, get the new image data
            $image = $this->upload->data();
            $file = $image['file_name'];
            // Update the database with the new data
            $data = [
                'budaya'     => $budaya,
                'keterangan' => $keterangan,
                'icon'       => $icon,
                'image'      => $file
            ];
            $this->Budaya_model->update('budaya',$id, $data);
    
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
            role="alert"> 
            Data distributor anda berhasil di edit! </div>');
            redirect('budaya');
        }

    public function hapus_budaya($id) 
    {
        $this->Budaya_model->hapus('budaya',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data budaya unit anda sudah di hapus! </div>');
        redirect('budaya');
    }
}

