<?php

class Home_customer extends CI_Controller {

	public function index()
	{
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('Home_customer');
		$this->load->view('template_customer/Footer');
	}
}
