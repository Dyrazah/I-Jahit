<?php

class Model_penilaian extends CI_Model {

	public function get_penilaian()
	{
		return $this->db->get('review');
	}

    // public function tambah_layanan($data,$table)
	// {
	// 	$this->db->insert($table,$data);
	// }

    public function edit_penilaian($where,$table)
	{
		return $this->db->get_where($table,$where);

	}

    public function update_penilaian($where,$data,$table)
	{
		$this->db->where($where);
        $this->db->update($table,$data);
      
	}

    public function hapus_penilaian($where,$table)
	{
		$this->db->where($where);
        $this->db->delete($table);
      
	}

}
