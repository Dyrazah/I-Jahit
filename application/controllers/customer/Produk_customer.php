<?php

class Produk_customer extends CI_Controller {

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
        $data['produk'] = $this->Model_produk->get_produk()->result();
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/Produk_customer', $data);
        $this->load->view('template_customer/Footer');
	}

    public function tambah_ke_keranjang($id)
	{
        $produk = $this->Model_produk->find($id);

        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga_produk,
            'name'    => $produk->nama_produk,
            // 'options' => array('Size' => 'L', 'Color' => 'Red')
        );
    
        $this->cart->insert($data);
        redirect('customer/Produk_customer');
	}

    public function detail_keranjang()
	{
        $this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/Keranjang_customer');
        $this->load->view('template_customer/Footer');
	}

    public function order()
	{
        $this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/Order_customer');
        $this->load->view('template_customer/Footer');
	}

    public function hapus_keranjang()
	{
        $this->cart->destroy();
        redirect('customer/Produk_customer');
    }

    public function proses_pesan()
	{
        $is_processed = $this->Model_invoice->index();
        if($is_processed){
            // $this->cart->destroy();
            $this->load->view('template_customer/Header');
            $this->load->view('template_customer/Sidebar');
            $this->load->view('customer/Pembayaran_customer');
            $this->load->view('template_customer/Footer');
        } else {
            echo"Maaf, Pesanan Anda Gagal Diproses";
        }
    }
}