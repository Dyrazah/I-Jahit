<?php

class Penilaian_admin extends CI_Controller {

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
        $data['penilaian'] = $this->Model_penilaian->get_penilaian()->result();
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/Penilaian_admin', $data);
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

    public function edit($id_review)
	{
        $where = array('id_review' =>$id_review);
        $data['penilaian'] = $this->Model_penilaian->edit_penilaian($where, 'review')->result();
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/Edit_penilaian', $data);
        $this->load->view('template_admin/Footer');
	}

    public function update()
	{
        $id_review           = $this->input->post('id_review');
        $komentar            = $this->input->post('komentar');
        $rating              = $this->input->post('rating');

        $data = array (
            'komentar' => $komentar,
            'rating' => $rating,
        );

        $where = array (
            'id_review' => $id_review
        );

        $this->Model_penilaian->update_penilaian($where,$data, 'review');
        redirect('admin/Penilaian_admin/index');
	}

    public function hapus($id_review)
	{
        $where = array ('id_review' => $id_review);
        $this->Model_penilaian->hapus_penilaian($where, 'review');
        redirect('admin/Penilaian_admin/index');
	}
}
