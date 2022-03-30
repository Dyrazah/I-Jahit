<?php 

class Invoice_admin extends CI_Controller {

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
        $data['invoice'] = $this->Model_invoice->get_invoice();
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/Invoice_admin', $data);
        $this->load->view('template_admin/Footer');
	}

	public function detail($id_invoice)
	{
        $data['invoice'] = $this->Model_invoice->ambil_id_invoice($id_invoice);
		$data['invoice'] = $this->Model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/Detail_invoice', $data);
        $this->load->view('template_admin/Footer');
	}

	public function edit($id_invoice)
	{
        $where = array('id_invoice' =>$id_invoice);
        $data['invoice'] = $this->Model_invoice->edit_invoice($where, 'tb_invoice')->result();
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/edit_invoice', $data);
        $this->load->view('template_admin/Footer');
	}

    public function update()
	{
        $id_invoice       	= $this->input->post('id_invoice');
        $status_pesanan     = $this->input->post('status_pesanan');

        $data = array (
            'status_pesanan' => $status_pesanan,
        );

        $where = array (
            'id_invoice' => $id_invoice
        );

        $this->Model_invoice->update_invoice($where,$data,'tb_invoice');
        redirect('admin/Invoice_admin/index');
	}

    public function hapus($id_invoice)
	{
        $where = array ('id_invoice' => $id_invoice);
        $this->Model_invoice->hapus_invoice($where, 'tb_invoice');
        redirect('admin/Invoice_admin/index');
	}

	public function print()
	{
		$data['invoice'] = $this->Model_invoice->get_invoice("tb_invoice");
		$this->load->view('admin/Print_invoice', $data);
	}
}