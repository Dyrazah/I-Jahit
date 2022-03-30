<?php

class Pembayaran_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_role') != '1')
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
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/Pembayaran_admin', $data);
        $this->load->view('template_admin/Footer');
	}

    // public function tambah_aksi()
    // {
    //     $nama_layanan = $this->input->post('nama_layanan');
    //     $deskripsi_layanan = $this->input->post('deskripsi_layanan');

    //     $data = array (
    //         'nama_layanan' => $nama_layanan,
    //         'deskripsi_layanan' => $deskripsi_layanan,
    //     );

    //     $this->Model_layanan->tambah_layanan($data, 'layanan');
    //     redirect('admin/Layanan_admin/index');
    // }

    public function edit($id_pembayaran)
	{
        $where = array('id_pembayaran' =>$id_pembayaran);
        $data['pembayaran'] = $this->Modal_bayar->edit_bayar($where, 'pembayaran')->result();
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/Edit_pembayaran', $data);
        $this->load->view('template_admin/Footer');
	}

    public function update()
	{
        $id_pembayaran       = $this->input->post('id_pembayaran');
        $status_pembayaran      = $this->input->post('status_pembayaran');
        $status_pesanan     = $this->input->post('status_pesanan');

        $data = array (
            'status_pembayaran' => $status_pembayaran,
            'status_pesanan' => $status_pesanan,
        );

        $where = array (
            'id_pembayaran' => $id_pembayaran
        );

        $this->Modal_bayar->update_bayar($where,$data, 'pembayaran');
        redirect('admin/Pembayaran_admin/index');
	}

    public function hapus($id_pembayaran)
	{
        $where = array ('id_pembayaran' => $id_pembayaran);
        $this->Modal_bayar->hapus_bayar($where, 'pembayaran');
        redirect('admin/Pembayaran_admin/index');
	}

    public function print_pembayaran()
	{
		$data['pembayaran'] = $this->Modal_bayar->get_bayar("pembayaran")->result();
		$this->load->view('admin/Print_pembayaran', $data);
	}

    // public function edit_invoice($id_invoice)
	// {
    //     $where = array('id_invoice' =>$id_invoice);
    //     $data['invoice'] = $this->Model_invoice->edit_invoice($where, 'tb_invoice')->result();
	// 	$this->load->view('template_admin/Header');
	// 	$this->load->view('template_admin/Sidebar');
	// 	$this->load->view('admin/edit_invoice', $data);
    //     $this->load->view('template_admin/Footer');
	// }

    // public function update_invoice()
	// {
    //     $id_invoice       	= $this->input->post('id_invoice');
    //     $status_pesanan     = $this->input->post('status_pesanan');

    //     $data = array (
    //         'status_pesanan' => $status_pesanan,
    //     );

    //     $where = array (
    //         'id_invoice' => $id_invoice
    //     );

    //     $this->Model_invoice->update_invoice($where,$data,'tb_invoice');
    //     redirect('admin/Invoice_admin/index');
	// }
}
