<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visimisi_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['visimisi'] = $this->db->get('visi_misi')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/visimisi/data_visimisi', $data);
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
        $this->load->view('admin/visimisi/create_visimisi', $data);
        $this->load->view('template/admin_footer');   
    }

    public function add_visimisi()
	{
        $this->Visimisi_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data berita anda sudah ditambahkan! </div>');
        redirect('berita');
    }

    public function edit($id) {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';
    
        // Retrieve the existing data for the specified ID
        $visimisi = $this->Visimisi_model->getRecordById($id);
    
        if ($visimisi) {
            // Load the edit view with the existing data
            $data['visimisi'] = $visimisi;
            $this->load->view('template/admin_header');
            $this->load->view('template/admin_navbar');
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('admin/visimisi/edit_visimisi', $data);
            $this->load->view('template/admin_footer');  
        } else {
            // Handle the case where the record with the given $id is not found
            show_404();
        }
    }

    public function update($id) {
        $this->load->library('upload');

            $judul = $this->input->post('visi');
            $isi_blog = $this->input->post('misi');
    
            // Cek apakah ada file gambar yang diupload
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = FCPATH . '/upload/img/visi/_misi/';
                $config['allowed_types'] = 'jpeg|jpg|png|gif';

                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data();
                    $file = $image['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                    redirect('visimisi');
                }
            }

            // Update data hanya jika ada file gambar baru diupload
            if (isset($file)) {
                $this->db->set('image', $file);
            }

            $this->db->set('visi', $visi);
            $this->db->set('misi', $misi);
            $this->db->where('id', $id);
            $this->db->update('visi_misi');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data visi misi anda berhasil di edit!</div>');
            redirect('visimisi');

        
    }

    public function hapus_visimisi($id) 
    {
        $this->Visimisi_model->hapus('visi_misi',   $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
        role="alert"> 
        Data visi misi anda sudah di hapus! </div>');
        redirect('visimisi');
    }
}