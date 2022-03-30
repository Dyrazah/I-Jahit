<?php

class Model_layanan extends CI_Model {

	public function get_layanan()
	{
		return $this->db->get('layanan');
	}

    public function tambah_layanan($data,$table)
	{
		$this->db->insert($table,$data);
	}

    public function edit_layanan($where,$table)
	{
		return $this->db->get_where($table,$where);

	}

    public function update_layanan($where,$data,$table)
	{
		$this->db->where($where);
        $this->db->update($table,$data);
      
	}

    public function hapus_layanan($where,$table)
	{
		$this->db->where($where);
        $this->db->delete($table);
      
	}

}
