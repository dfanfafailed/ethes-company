<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Distributor_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['distributor'] = $this->db->get('distributor')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/distributor/distributor', $data);
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
        $this->load->view('admin/distributor/distributor_create', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_distributor()
	{
        $this->Distributor_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data distributor anda sudah ditambahkan! </div>');
        redirect('distributor');
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
            $this->load->view('admin/distributor/distributor_edit', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        $this->load->library('upload');

            $distributor = $this->input->post('distributor');
            $produk = $this->input->post('produk');
            $tittle = $this->input->post('tittle');
            $link = $this->input->post('link');

            // Cek apakah ada file gambar yang diupload
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = FCPATH . '/upload/img/distributor/';
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

            $this->db->set('distributor', $distributor);
            $this->db->set('produk', $produk);
            $this->db->set('tittle', $tittle);
            $this->db->set('link', $link);
            $this->db->where('id_distributor', $id);
            $this->db->update('distributor');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data distributor anda berhasil di edit!</div>');
            redirect('distributor');

        
    }

    public function hapus_distributor($id) 
    {
        $this->Distributor_model->hapus('distributor',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data DISTRIBUTOR menu anda sudah di hapus! </div>');
        redirect('distributor');
    }
}