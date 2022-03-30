<?php

class Pembayaran_penjahit extends CI_Controller {

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
        $data['pembayaran'] = $this->Modal_bayar->get_bayar()->result();
		$this->load->view('template_penjahit/Header');
		$this->load->view('template_penjahit/Sidebar');
		$this->load->view('penjahit/Pembayaran_penjahit', $data);
        $this->load->view('template_penjahit/Footer');
	}

    public function edit($id_pembayaran)
	{
        $where = array('id_pembayaran' =>$id_pembayaran);
        $data['pembayaran'] = $this->Modal_bayar->edit_bayar($where, 'pembayaran')->result();
		$this->load->view('template_penjahit/Header');
		$this->load->view('template_penjahit/Sidebar');
		$this->load->view('penjahit/Edit_pembayaran', $data);
        $this->load->view('template_penjahit/Footer');
	}

    public function update()
	{
        $id_pembayaran       = $this->input->post('id_pembayaran');
        $status_pesanan     = $this->input->post('status_pesanan');

        $data = array (
            'status_pesanan' => $status_pesanan,
        );

        $where = array (
            'id_pembayaran' => $id_pembayaran
        );

        $this->Modal_bayar->update_bayar($where,$data, 'pembayaran');
        redirect('penjahit/Pembayaran_penjahit/index');
	}

    public function hapus($id_pembayaran)
	{
        $where = array ('id_pembayaran' => $id_pembayaran);
        $this->Modal_bayar->hapus_bayar($where, 'pembayaran');
        redirect('penjahit/Pembayaran_penjahit/index');
	}

    public function print_pembayaran()
	{
		$data['pembayaran'] = $this->Modal_bayar->get_bayar("pembayaran")->result();
		$this->load->view('penjahit/Print_pembayaran', $data);
	}
}
