<?php

class Proses_pesan extends CI_Controller {
	
	public function index()
	{
		$this->cart->destroy();
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/proses_pesan');
		$this->load->view('template_customer/Footer');
	}
}
