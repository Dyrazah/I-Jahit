<?php

class Produk extends CI_Controller {

	public function index()
	{
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/Produk');
        $this->load->view('template_customer/Footer');
	}
}