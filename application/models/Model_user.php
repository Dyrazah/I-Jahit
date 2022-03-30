<?php

class Model_user extends CI_Model {

	public function get_customer()
	{
		return $this->db->get_where('user',array('id_role' => '2'));
	}

    public function get_penjahit()
	{
		return $this->db->get_where('user',array('id_role' => '3'));
	}

    public function hapus_user($where,$table)
	{
		$this->db->where($where);
        $this->db->delete($table);
	}
}