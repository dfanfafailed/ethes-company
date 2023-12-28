<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Store_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
        
        $data['offline'] = $this->db->get('offline_store')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/offline/data_offline', $data);
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
        $this->load->view('admin/offline/create_offline');
        $this->load->view('template/admin_footer');   
    }

    public function add_store()
	{
        $this->Store_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data offline store anda berhasil ditambahkan! </div>');
        redirect('store');
    }


    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';

        // Ambil data yang ada untuk ID yang ditentukan
        $store = $this->Store_model->getRecordById($id);
    
        if ($store) {
            // Load the edit view with the existing data
            $data['store'] = $store;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/offline/edit_offline', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
        $this->load->library('upload');
        $nama_store    = $this->input->post('nama_store');
        $alamat_outlet = $this->input->post('alamat_outlet');
        $outlet        = $this->input->post('outlet');
        $link_alamat   = $this->input->post('link_alamat');
        $foto          = $this->input->post('foto');
    
        
        // Cek apakah ada file gambar yang diupload
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = FCPATH . '/upload/img/offline/';
            $config['allowed_types'] = 'jpeg|jpg|png|gif';

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data();
                $file = $foto['file_name'];
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                redirect('store');
            }
        }
        if (isset($file)) {
            $this->db->set('foto', $file);
        }

        $this->db->set('nama_store', $nama_store);
        $this->db->set('alamat_outlet', $alamat_outlet);
        $this->db->set('outlet', $outlet);
        $this->db->set('link_alamat', $link_alamat);
        $this->db->where('id_store', $id);
        $this->db->update('offline_store');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data store anda berhasil di edit!</div>');
        redirect('store');
        }

        
    public function hapus_store($id) 
    {
        $this->Store_model->hapus('offline_store',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data banner menu anda sudah di hapus! </div>');
        redirect('store');
    }
}