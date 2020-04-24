<?php

class Auth extends CI_Controller {
    public function login()
    {
        $this->form_validation->set_rules('nama','Nama','required',[
            'required'  => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('password','Password','required',[
            'required'  => 'Password wajib diisi!'
        ]);
        if ($this->form_validation->run() == FALSE)
        {
            
            $this->load->view('form_login');
          
        }else{
            $auth = $this->model_auth->cek_login();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nama atau Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
            }else {
                $this->session->set_userdata('nama',$auth->nama);
                redirect('Dashboard/index');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

}