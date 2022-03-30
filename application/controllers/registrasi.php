<?php

class Registrasi extends CI_Controller {

	public function index()
	{
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password');
        $this->form_validation->set_rules('konfirm_pass', 'Password');
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registrasi');
        } else {
            $data = array(
                'id_user'   => '',
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'email'     => $this->input->post('email'),
                'password'  => $this->input->post('password'),
                'id_role'   => '2',
            );

            $this->db->insert('user', $data);
            redirect('auth/login');
        }
    }
}