<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komisaris extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('komisaris_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['komisaris'] = $this->db->get('komisaris')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/komisaris/data_komisaris', $data);
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
        $this->load->view('admin/komisaris/create_komisaris', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_komisaris()
	{
        $this->komisaris_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data komisaris anda sudah ditambahkan! </div>');
        redirect('komisaris');
    }

    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $komisaris = $this->komisaris_model->getRecordById($id);
    
        if ($komisaris) {
            // Load the edit view with the existing data
            $data['komisaris'] = $komisaris;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/komisaris/edit_komisaris', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        // Retrieve the input data from the form submission
        $jabatan        = $this->input->post('jabatan');
        $nama_komisaris   = $this->input->post('nama_komisaris');
        $alamat         = $this->input->post('alamat');
        $email          = $this->input->post('email');
        $telepon        = $this->input->post('telepon');
        $image           = $this->input->post('image');
    
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = FCPATH . '/upload/img/komisaris/';
            $config['allowed_types'] = 'jpeg|jpg|png|gif';

            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $file = $image['file_name'];
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                redirect('distributor');
            }
        }

        // Update data hanya jika ada file gambar baru diupload
        if (isset($file)) {
            $this->db->set('image', $file);
        }

        $this->db->set('jabatan', $jabatan);
        $this->db->set('nama_komisaris', $nama_komisaris);
        $this->db->set('alamat', $alamat);
        $this->db->set('email', $email);
        $this->db->set('telepon', $telepon);
        $this->db->where('id', $id);
        $this->db->update('komisaris');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data komisaris anda berhasil di edit!</div>');
        redirect('komisaris');

    }

    public function hapus_komisaris($id) 
    {
        $this->komisaris_model->hapus('komisaris',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data komisaris anda sudah di hapus! </div>');
        redirect('komisaris');
    }
}

