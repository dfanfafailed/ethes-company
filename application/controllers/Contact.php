<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['contact'] = $this->db->get('contact')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/contact/index', $data);
        $this->load->view('template/admin_footer');
    }

    public function create() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';

        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/contact/create', $data);
        $this->load->view('template/admin_footer');   
    }

    public function store()
	{
        $this->Contact_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, Data Contact anda sudah ditambahkan! </div>');
        redirect('contact');
    }

    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $contact = $this->Contact_model->getRecordById($id);
    
        if ($contact) {
            // Load the edit view with the existing data
            $data['contact'] = $contact;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/contact/edit', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
        $address    = $this->input->post('address');
        $email_us         = $this->input->post('email_us');
        $number_call         = $this->input->post('number_call');
        $maps                   = $this->input->post('maps');
    
            $data = [
                'address' => $address,
                'email_us' => $email_us,
                'number_call' => $number_call,
                'maps' => $maps
            ];

            $this->Contact_model->update('contact',$id, $data);
    
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
            role="alert"> 
            Data Contact anda berhasil di edit! </div>');
            redirect('contact');
    }

    public function destroy($id) 
    {
        $this->Contact_model->hapus('contact',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data Contact anda sudah di hapus! </div>');
        redirect('contact');
    }
}

