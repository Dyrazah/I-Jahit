<?php

class Modal_bayar extends CI_Model {

	public function get_bayar()
	{
		return $this->db->get('pembayaran');
	}

	public function tambah_bayar($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function edit_bayar($where,$table)
	{
		return $this->db->get_where($table,$where);

	}

    public function update_bayar($where,$data,$table)
	{
		$this->db->where($where);
        $this->db->update($table,$data);
	}

    public function hapus_bayar($where,$table)
	{
		$this->db->where($where);
        $this->db->delete($table);
      
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->like('nama_pemilik_rek', $keyword);
        return $this->db->get()->result();
	}

}