<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Direksi_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['direksi'] = $this->db->get('direksi')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/direksi/data_direksi', $data);
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
        $this->load->view('admin/direksi/create_direksi', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_direksi()
	{
        $this->Direksi_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data direksi anda sudah ditambahkan! </div>');
        redirect('direksi');
    }

    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $direksi = $this->Direksi_model->getRecordById($id);
    
        if ($direksi) {
            // Load the edit view with the existing data
            $data['direksi'] = $direksi;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/direksi/edit_direksi', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
        $jabatan        = $this->input->post('jabatan');
        $nama_direksi   = $this->input->post('nama_direksi');
        $alamat         = $this->input->post('alamat');
        $email          = $this->input->post('email');
        $telepon        = $this->input->post('telepon');
        $foto           = $this->input->post('foto');
    
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = FCPATH . '/upload/img/direksi/';
            $config['allowed_types'] = 'jpeg|jpg|png|gif';

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data();
                $file = $foto['file_name'];
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                redirect('distributor');
            }
        }

        // Update data hanya jika ada file gambar baru diupload
        if (isset($file)) {
            $this->db->set('foto', $file);
        }

        $this->db->set('jabatan', $jabatan);
        $this->db->set('nama_direksi', $nama_direksi);
        $this->db->set('alamat', $alamat);
        $this->db->set('email', $email);
        $this->db->set('telepon', $telepon);
        $this->db->where('id', $id);
        $this->db->update('direksi');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data direksi anda berhasil di edit!</div>');
        redirect('direksi');

    }

    public function hapus_direksi($id) 
    {
        $this->Direksi_model->hapus('direksi',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data Direksi anda sudah di hapus! </div>');
        redirect('direksi');
    }
}

