<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() 
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/auth_header');
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');

        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['username' => $username])->row_array();

            // var_dump($user); 
            // die;

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'as_id' => $user['as_id']
                    ];
                    $this->session->set_userdata($data);

                    if($user['as_id'] == 1){ //admin
                        redirect('admin');
                    }else{
                        redirect('user');
                    }

                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" 
                    role="alert"> 
                    Password anda salah! </div>');
                    redirect('auth');
                }

                } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary" 
                role="alert"> 
                    Username anda salah, anda belum mendaftar </div>');
                    redirect('auth');

            }

            redirect('auth');
        }
    }

    public function register() 
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

        //jika validasi salah akan menampilkan halaman registarsi
        if ($this->form_validation->run() == false) {

        $this->load->view('template/auth_header');
        $this->load->view('auth/register');
        $this->load->view('template/auth_footer');

        }else{
            // echo "Selamat anda, sudah berhasil terdaftar";
            $data = [
                'nama'             => $this->input->post('nama', true),
                'username'         => $this->input->post('username', true),
                'email'            => $this->input->post('email', true),
                'password'         => password_hash($this->input->post('password', true), PASSWORD_BCRYPT) ,
                'as_id'            => 2,
                'gambar'           => 'smile.jpg',
                'date_created'     => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert"> Selamat anda sudah terdaftar silahkan login </div>');

            redirect('auth');
        }
    }

    public function logout() 
    {
        $this->session->unset_userdata('username'); 
        $this->session->unset_userdata('as_id'); 

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert">  Anda sudah keluar! </div>');

        redirect('auth');
        
    }
}