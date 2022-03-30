<?php

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_role') != '2')
		{
			$this->session->set_flashdata('pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belom Login !
            </div>');
			redirect('auth/login');
		}
	}
	
	public function jahit()
	{
        $data['jahit'] = $this->Model_kategori->data_jahit()->result();
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/Jahit', $data);
        $this->load->view('template_customer/Footer');
	}

    public function potong()
	{
        $data['potong'] = $this->Model_kategori->data_potong()->result();
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/Potong', $data);
        $this->load->view('template_customer/Footer');
	}

    public function rombak()
	{
        $data['rombak'] = $this->Model_kategori->data_rombak()->result();
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/Rombak', $data);
        $this->load->view('template_customer/Footer');
	}
}