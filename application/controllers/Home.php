<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model'); 
		$this->load->model('Banner_model');     
		$this->load->model('Distributor_model');     
		$this->load->model('Store_model');     
		$this->load->model('Berita_model');     
		$this->load->model('Busines_model');     
		$this->load->model('Direksi_model');     
		$this->load->model('Komisaris_model');     
		$this->load->model('Organisasi_model');     
		$this->load->model('Plan_model');     
		$this->load->model('Strukturgrup_model');     
		$this->load->model('Sejarah_model');     
		$this->load->model('Tentang_model');     
		$this->load->model('Visimisi_model');     
		$this->load->model('Tampilan_model');
		$this->load->model('Tampilan_model');     
    $this->load->helper(array('form', 'url', ));
    }
	
    public function index()
	{

        $data['tampilan'] = $this->db->get('tampilan')->result_array();
        $data['banner'] = $this->db->get('banner_img')->result_array();
		$data['services'] = $this->db->get('service')->result_array();
		$data['tentang'] = $this->db->get('tentang')->result_array();
		$data['visimisi'] = $this->db->get('visi_misi')->result_array();
		$data['budaya'] = $this->db->get('budaya')->result_array();

		$this->load->view('template/home_header', $data);
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/beranda', $data);
		$this->load->view('template/home_footer', $data);
	}


	public function about() 
	{
		$data['tampilan'] = $this->db->get('tampilan')->result_array();
		$data['direksi'] = $this->db->get('direksi')->result_array();
		$data['organisasi'] = $this->db->get('organisasi')->result_array();
		$data['komisaris'] = $this->db->get('komisaris')->result_array();
		$data['grup'] = $this->db->get('struktur_grup')->result_array();
		$data['sejarah'] = $this->db->get('sejarah')->result_array();


		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/about', $data);
		$this->load->view('template/home_footer', $data);
	}

	public function busines_unit()
	{
		$data['tampilan'] = $this->db->get('tampilan')->result_array();
		$data['busines'] = $this->db->get('busines_unit')->result_array();

		$this->load->view('template/home_header' );
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/busines/busines_unit', $data);
		$this->load->view('template/home_footer', $data);
	}

	public function distributor() 
	{
		$data['tampilan'] = $this->db->get('tampilan')->result_array();
		$data['distributor'] = $this->db->get('distributor')->result_array();
		
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/busines/distributor', $data);
		$this->load->view('template/home_footer', $data);
	}

	public function store() 
	{
		$data['tampilan'] = $this->db->get('tampilan')->result_array();
		$data['store'] = $this->db->get('offline_store')->result_array();
		
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/busines/offline_store', $data);
		$this->load->view('template/home_footer', $data);
	}

	public function information() 
	{
		$data['tampilan'] = $this->db->get('tampilan')->result_array();
		$data['berita'] = $this->db->get('blog')->result_array();

		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/informasi/berita', $data);
		$this->load->view('template/home_footer', $data);
	}

	public function detail_information($id) 
	{
		$data['tampilan'] = $this->db->get('tampilan')->result_array();
		 // Retrieve the existing data for the specified ID
		 $berita = $this->Berita_model->getRecordById($id);
    
        if ($berita) {
			 // Load the edit view with the existing data
			 $data['berita'] = $berita;
			 $this->load->view('template/home_header');
			 $this->load->view('template/home_navbar', $data);
			 $this->load->view('home/informasi/detail_berita', $data);
			 $this->load->view('template/home_footer', $data);  
		 } else {
			 // Handle the case where the record with the given $id is not found
			 show_404();
		 }

		
	}

	public function contact() 
	{
		$data['tampilan'] = $this->db->get('tampilan')->result_array();
		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/contact', $data);
		$this->load->view('template/home_footer', $data);
	}

	public function plan() 
	{   
		$data['tampilan'] = $this->db->get('tampilan')->result_array();
		$data['plan'] = $this->db->get('plan')->result_array();
		$data['services'] = $this->db->get('service')->result_array();

		$this->load->view('template/home_header');
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/plan', $data);
		$this->load->view('template/home_footer', $data);
	}

	


}