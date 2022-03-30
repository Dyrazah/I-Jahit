<?php

class Model_invoice extends CI_Model {

	public function index()
	{
		$nama               = $this->input->post('nama_pengorder');
        $nomorhp            = $this->input->post('nomorhp_pengorder');
        $email              = $this->input->post('email_pengorder');
        $alamat             = $this->input->post('alamat_pengorder');
        $keterangan         = $this->input->post('keterangan');
        $pengambilan        = $this->input->post('pengambilan');
        $tgl_pengambilan    = $this->input->post('tgl_pengambilan');
        $pengiriman         = $this->input->post('pengiriman');
        $tgl_pengiriman     = $this->input->post('tgl_pengiriman');
        $metode_pembayaran  = $this->input->post('metode_pembayaran');

        $invoice = array (
            'nama_pengorder'    => $nama,
            'nomorhp_pengorder' => $nomorhp,
            'email_pengorder'   => $email,
            'alamat_pengorder'  => $alamat,
            'keterangan'        => $keterangan,
            'pengambilan'       => $pengambilan,
            'tgl_pengambilan'   => $tgl_pengambilan,
            'pengiriman'        => $pengiriman,
            'tgl_pengiriman'    => $tgl_pengiriman,
            'metode_pembayaran' => $metode_pembayaran,
        );

        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array (
                'id_invoice'    => $id_invoice,
                'id_produk'     => $item['id'],
                'nama_produk'   => $item['name'],
                'jumlah'        => $item['qty'],
                'harga'         => $item['price'],
            );

            $this->db->insert('tb_transaksi', $data);
        }

        return TRUE;

	}

    public function get_invoice()
	{
		$result = $this->db->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
	}

    public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->row();
        } else {
            return false;
        }
	}

    public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('tb_transaksi');
        if($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
	}

    public function edit_invoice($where,$table)
	{
		return $this->db->get_where($table,$where);

	}

    public function update_invoice($where,$data,$table)
	{
		$this->db->where($where);
        $this->db->update($table,$data);
	}

    public function hapus_invoice($where,$table)
	{
		$this->db->where($where);
        $this->db->delete($table);
      
	}

    public function get_keyword($keyword)
	{
		$this->db->select('*');
        $this->db->from('tb_invoice');
        $this->db->like('nama_pengorder', $keyword);
        return $this->db->get()->result();
	}

}
