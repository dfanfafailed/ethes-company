<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busines extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Busines_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['busines'] = $this->db->get('busines_unit')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/busines_unit/busines', $data);
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
        $this->load->view('admin/busines_unit/busines_create', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_busines()
	{
        $this->Busines_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data busines unit anda sudah ditambahkan! </div>');
        redirect('busines');
    }

    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $busines = $this->Busines_model->getRecordById($id);
    
        if ($busines) {
            // Load the edit view with the existing data
            $data['busines_unit'] = $busines;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/busines_unit/busines_edit', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
        $badan_hukum    = $this->input->post('badan_hukum');
        $bisnis         = $this->input->post('bisnis');
    
            $data = [
                'badan_hukum' => $badan_hukum,
                'bisnis' => $bisnis,
            ];
            $this->Busines_model->update('busines_unit',$id, $data);
    
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
            role="alert"> 
            Data busines unit anda berhasil di edit! </div>');
            redirect('busines');
    }

    public function hapus_busines($id) 
    {
        $this->Busines_model->hapus('busines_unit',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data busines unit anda sudah di hapus! </div>');
        redirect('busines');
    }
}

