<?php

class Auth extends CI_Controller {

	public function login()
	{
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('Login');
        } else {
            $auth = $this->Model_auth->cek_login();

            if($auth == FALSE){
                $this->session->set_flashdata('pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                </div>');
                redirect('auth/Login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('id_role', $auth->id_role);

                switch($auth->id_role){
                    case 1 : redirect('admin/Dashboard_admin');
                    break;
                    case 2 : redirect('customer/Dashboard_customer');
                    break;
                    case 3 : redirect('penjahit/Dashboard_penjahit');
                    break;
                    default : break;
                }
            }
        }
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
