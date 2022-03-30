<?php

class Model_produk extends CI_Model {

	public function get_produk()
	{
		return $this->db->get('product');
	}

	// public function get_layanan()
	// {
	// 	return $this->db->get('layanan');
	// }

	// public function get_join()
	// {
	// 	return $this->db->join('product','product.id_layanan = layanan.id_layanan' );
	// }



    public function tambah_produk($data,$table)
	{
		$this->db->insert($table,$data);
	}

    public function edit_produk($where,$table)
	{
		return $this->db->get_where($table,$where);

	}

    public function update_produk($where,$data,$table)
	{
		$this->db->where($where);
        $this->db->update($table,$data);
      
	}

    public function hapus_produk($where,$table)
	{
		$this->db->where($where);
        $this->db->delete($table);
      
	}

	public function find($id)
	{
		$result = $this->db->where('id_produk', $id)->limit(1)->get('product');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
      
	}



}
