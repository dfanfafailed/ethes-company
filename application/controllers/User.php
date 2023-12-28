<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    
    public function index() 
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';

        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/user/data_user');
        $this->load->view('template/admin_footer');
    }

    public function create_user() 
    {
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar');
        $this->load->view('admin/user/create_user');
        $this->load->view('template/admin_footer');
    }

    public function add_user() 
    { 
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin_dashboard');
        } else {
            $this->load->model('User_model');

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $gambar_path = 'uploads/' . $upload_data['file_name'];

                $data = array(
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'gambar' => $gambar_path,
                    'email' => $this->input->post('email'),
                    'date_created' => date('Y-m-d H:i:s') // Format date sesuai dengan kebutuhan
                );

                $this->User_model->add_user($data);
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin_dashboard', $error);
            }
        }
    }
}