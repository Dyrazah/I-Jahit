<?php

class Model_kategori extends CI_Model {

	public function data_jahit()
	{
		return $this->db->get_where('product',array('id_layanan' => '3'));
	}

    public function data_potong()
	{
		return $this->db->get_where('product',array('id_layanan' => '2'));
	}

    public function data_rombak()
	{
		return $this->db->get_where('product',array('id_layanan' => '1'));
	}
}