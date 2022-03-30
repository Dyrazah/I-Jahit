<?php

class Dashboard_penjahit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_role') != '3')
		{
			$this->session->set_flashdata('pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belom Login !
            </div>');
			redirect('auth/login');
		}
	}

	public function index()
	{
		$this->load->view('template_penjahit/Header');
		$this->load->view('template_penjahit/Sidebar');
		$this->load->view('penjahit/Dashboard_penjahit');
        $this->load->view('template_penjahit/Footer');
	}
}
