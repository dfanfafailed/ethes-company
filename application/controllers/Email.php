<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Banner_model');   
        $this->load->helper(array('form', 'url'));

    }

    public function index()
    {
        $this->load->view('template/home_header');
		$this->load->view('template/home_navbar');
		$this->load->view('home/contact');
		$this->load->view('template/home_footer');
    }

    public function sendmail()
    {
        if (isset($_POST['submit_email'])) {
        //    $nama  = $this->input->post('nama');
           $email  = $this->input->post('email');
           $subject  = $this->input->post('subject');
           $message  = $this->input->post('message');

           if (!empty($email)) {
            // configuration email 

            $config = [
                'mailtype'     =>  'text',
                'charset'      => 'iso-8859-1',
                'protocol'     => 'smtp',
                'smtp_host'    => 'ssl://smtp.googlemail.com',
                'smtp_user'    => 'nama_email.gmail',
                'smtp_pass'    => 'xxx',
                'smtp_port'    =>  465

            ];

            $this->load->library('email', $config);
            $this->email->initialize($config);
            // end config

            $this->email->from('emailfrom');
            $this->email->to($email);
            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send()) {
                # code...
            }

           }
        }
    }
}