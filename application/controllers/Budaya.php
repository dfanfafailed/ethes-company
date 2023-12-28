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


        $data['budaya'] = $this->db->get('budaya')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/budaya/budaya', $data);
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
        $this->load->view('admin/budaya/create', $data);
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
        $budaya = $this->Budaya_model->getRecordById($id);

        if ($budaya) {
            // Load the edit view with the existing data
            $data['budaya'] = $budaya;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/budaya/edit', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
       $this->load->library('upload');

        $budaya       = $this->input->post('budaya');
        $keterangan  = $this->input->post('keterangan');
        $image               = $this->input->post('image');
    
        
      if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = FCPATH . '/upload/img/budaya';
                $config['allowed_types'] = 'jpeg|jpg|png|gif';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data();
                    $file = $image['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                    redirect('budaya');
                }
            }

            // Update data hanya jika ada file gambar baru diupload
            if (isset($file)) {
                $this->db->set('image', $file);
            }

            $this->db->set('budaya', $budaya);
            $this->db->set('keterangan', $keterangan);
            $this->db->where('id', $id);
            $this->db->update('budaya');
    
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
            role="alert"> 
            Data pelayanan anda berhasil di edit! </div>');
            redirect('budaya');        }

    public function hapus_budaya($id) 
    {
        $this->Budaya_model->hapus('budaya',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data budaya unit anda sudah di hapus! </div>');
        redirect('budaya');
    }
}

