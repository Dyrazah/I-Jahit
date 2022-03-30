<?php

class Cek_pesanan extends CI_Controller {

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
	
	public function index()
	{
		$data['invoice'] = $this->Model_invoice->get_invoice();
		$data['pembayaran'] = $this->Modal_bayar->get_bayar()->result();
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/cek_pesanan', $data);
		$this->load->view('template_customer/Footer');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['pembayaran'] = $this->Modal_bayar->get_keyword($keyword);
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/cek_pesanan', $data);
		$this->load->view('template_customer/Footer');
	}

}
