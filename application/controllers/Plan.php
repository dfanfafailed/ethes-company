<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Plan_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['plan'] = $this->db->get('plan')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/plan/plan', $data);
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
        $this->load->view('admin/plan/plan_create', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_plan()
	{
        $this->Plan_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data plan pertumbuhan anda sudah ditambahkan! </div>');
        redirect('plan');
    }

    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $plan = $this->Plan_model->getRecordById($id);
    
        if ($plan) {
            // Load the edit view with the existing data
            $data['plan'] = $plan;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/plan/plan_edit', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
        $tahun    = $this->input->post('tahun');
        $rencana  = $this->input->post('rencana');
    
            $data = [
                'tahun' => $tahun,
                'rencana' => $rencana,
            ];
            $this->Plan_model->update('plan',$id, $data);
    
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
            role="alert"> 
            Data plan anda berhasil di edit! </div>');
            redirect('plan');
    }

    public function hapus_plan($id) 
    {
        $this->Plan_model->hapus('plan',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data busines unit anda sudah di hapus! </div>');
        redirect('plan');
    }
}

