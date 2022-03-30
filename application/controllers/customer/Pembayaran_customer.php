<?php

class Pembayaran_customer extends CI_Controller {

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
		$this->load->view('template_customer/Header');
		$this->load->view('template_customer/Sidebar');
		$this->load->view('customer/Pembayaran_customer');
		$this->load->view('template_customer/Footer');
	}

    public function tambah_bayar()
    {
        // $this->cart->destroy();
        $nama_pemilik_rek   = $this->input->post('nama_pemilik_rek');
        $keterangan         = $this->input->post('keterangan');
        $status_pembayaran  = 'Menunggu Verifikasi';
        $status_pesanan = 'Menunggu Pembayaran';
        $bukti_pembayaran   = $_FILES['bukti_pembayaran'];

        if ($bukti_pembayaran=''){}else {
            $config['upload_path']  = './assets/bukti_pembayaran';
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('bukti_pembayaran')) {
                $bukti_pembayaran=$this->upload->data('Tidak Ada.jpg');
            } else {
                $bukti_pembayaran=$this->upload->data('file_name');
            }
        }

        $data = array (
            'nama_pemilik_rek' => $nama_pemilik_rek,
            'keterangan' => $keterangan,
            'bukti_pembayaran' => $bukti_pembayaran,
            'status_pembayaran' => $status_pembayaran,
            'status_pesanan' => $status_pesanan
        );

        $this->Modal_bayar->tambah_bayar($data, 'pembayaran');
        // $id_transaksi = $this->db->insert_id();

        redirect('customer/Proses_pesan');
    }

    // public function proses_bayar()
	// {
    //     $is_processed = $this->Model_bayar->index();
    //     if($is_processed){
    //         $this->load->view('template_customer/Header');
    //         $this->load->view('template_customer/Sidebar');
    //         $this->load->view('customer/Proses_pesan');
    //         $this->load->view('template_customer/Footer');
    //     } else {
    //         echo"Maaf, Pesanan Anda Gagal Diproses";
    //     }
    // }

    // public function invoice()
	// {
    //     $data['invoice'] = $this->Model_invoice->get_invoice();
	// 	$this->load->view('template_customer/Header');
	// 	$this->load->view('template_customer/Sidebar');
	// 	$this->load->view('customer/Pembayaran_customer', $data);
	// 	$this->load->view('template_customer/Footer');
	// }
}
