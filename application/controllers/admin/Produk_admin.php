<?php

class Produk_admin extends CI_Controller {

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
        $data['produk'] = $this->Model_produk->get_produk()->result();
        // $data['layanan'] = $this->Model_produk->get_layanan()->result();
        // $data['join_produk_layanan'] = $this->Model_produk->get_join()->result();
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/Produk_admin', $data);
        $this->load->view('template_admin/Footer');
	}

    public function tambah_aksi()
    {
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $deskripsi_produk = $this->input->post('deskripsi_produk');
        $status_produk = $this->input->post('status_produk');
        $foto_produk = $_FILES['foto_produk']['name'];
        if ($foto_produk = '-'){} else {
            $config ['upload_path'] = './upload/foto_produk';
            $config ['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_produk')){
                echo "Gambar Gagal Di Upload!";
            } else {
                $foto_produk=$this->upload->data('file_nama');
            }
        }

        $data = array (
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'deskripsi_produk' => $deskripsi_produk,
            'status_produk' => $status_produk,
            'foto_produk' => $foto_produk
        );

        $this->Model_produk->tambah_produk($data, 'product');
        redirect('admin/Produk_admin/index');
    }

    public function edit($id)
	{
        $where = array('id_produk' =>$id);
        $data['produk'] = $this->Model_produk->edit_produk($where, 'product')->result();
		$this->load->view('template_admin/Header');
		$this->load->view('template_admin/Sidebar');
		$this->load->view('admin/Edit_produk', $data);
        $this->load->view('template_admin/Footer');
	}

    public function update()
	{
        $id                 = $this->input->post('id_produk');
        $nama_produk        = $this->input->post('nama_produk');
        $harga_produk       = $this->input->post('harga_produk');
        $deskripsi_produk   = $this->input->post('deskripsi_produk');
        $status_produk      = $this->input->post('status_produk');

        $data = array (
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'deskripsi_produk' => $deskripsi_produk,
            'status_produk' => $status_produk,
        );

        $where = array (
            'id_produk' => $id
        );

        $this->Model_produk->update_produk($where,$data, 'product');
        redirect('admin/Produk_admin/index');
	}

    public function hapus($id)
	{
        $where = array ('id_produk' => $id);
        $this->Model_produk->hapus_produk($where, 'product');
        redirect('admin/Produk_admin/index');
	}
}
