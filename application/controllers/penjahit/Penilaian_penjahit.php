<?php

class Penilaian_penjahit extends CI_Controller {

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
        $data['penilaian'] = $this->Model_penilaian->get_penilaian()->result();
		$this->load->view('template_penjahit/Header');
		$this->load->view('template_penjahit/Sidebar');
		$this->load->view('penjahit/Penilaian_penjahit', $data);
        $this->load->view('template_penjahit/Footer');
	}

    // public function edit($id_review)
	// {
    //     $where = array('id_review' =>$id_review);
    //     $data['penilaian'] = $this->Model_penilaian->edit_penilaian($where, 'review')->result();
	// 	$this->load->view('template_admin/Header');
	// 	$this->load->view('template_admin/Sidebar');
	// 	$this->load->view('admin/Edit_penilaian', $data);
    //     $this->load->view('template_admin/Footer');
	// }

    // public function hapus($id_review)
	// {
    //     $where = array ('id_review' => $id_review);
    //     $this->Model_penilaian->hapus_penilaian($where, 'review');
    //     redirect('admin/Penilaian_admin/index');
	// }
}
