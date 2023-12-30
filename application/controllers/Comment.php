<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Comment_model');  
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
        ->row_array();
        $data['keterangan'] = 'Administator';


        $data['comment'] = $this->db->get('comment')->result_array();

        // Load view to display services
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_navbar');
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('admin/comment/index', $data);
        $this->load->view('template/admin_footer');
    }

    public function create() {
        $this->Comment_model->create();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" 
        role="alert"> 
        Selamat, data busines unit anda sudah ditambahkan! </div>');
        redirect('/home/contact/index');
    }

}