<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth/M_auth');
    }

    public function index()
    {
        $this->load->view('auth/header');
        $this->load->view('auth/login');
        $this->load->view('layout/footer');
    }

    public function register()
    {
        $this->load->view('auth/header');
        $this->load->view('auth/register');
        $this->load->view('layout/footer');
    }
    
    public function r_auth()
    {
        $this->r_rules();
		if ($this->form_validation->run() == FALSE) {
                $this->load->view('auth/header');
                $this->load->view('auth/register');
                $this->load->view('layout/footer');
			} else {
			    $this->M_auth->add_register();
				redirect('admin');
			}
    }

	public function logout()
	{
		session_destroy();
		redirect('admin');
	}
}

/* End of file Pesona.batubolong.php and path \application\controllers\Pesona.batubolong.php */
