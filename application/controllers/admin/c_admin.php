<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_admin');
    }   

    public function index()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/auth/login');
        $this->load->view('admin/layout/footer');
    }

    public function _rules()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
	}
    public function r_rules()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('first_name','first_name','required');
		$this->form_validation->set_rules('last_name','last_name','required');
	}

    public function auth()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/layout/header');
            $this->load->view('admin/auth/login');
            $this->load->view('admin/layout/footer');
		}else{
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));

			$cek = $this->M_admin->cek_login($username, $password);

			if ($cek == FALSE) {
				echo "<SCRIPT language=Javascript>
					  alert('Login Anda Gagal,  username dan password tidak valid. Silahkan Ulangi Lagi')
					  </script>";
					  echo "<meta http-equiv='refresh' content='0'; url=<?= base_url('auth')?>>";
			}else{
				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('level', $cek->level);
				switch ($cek->level) {
					case 1 : 	redirect('admin/c_admin/dashboard');  //admin
								break;
					case 2 : 	redirect('#');  //stand
								break;
                    case 2 : 	redirect('#');  //pengunjung
                                break;
					default:	
								break;
				}
                // if(!empty($this->input->post("remember"))) {
                //     setcookie ("loginId", $username, time()+ (10 * 365 * 24 * 60 * 60));  
                //     setcookie ("loginPass", $password,  time()+ (10 * 365 * 24 * 60 * 60));
                //   } else {
                //     setcookie ("loginId",""); 
                //     setcookie ("loginPass","");
                //   }
			}
		}
	}

    public function dashboard()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/body');
        $this->load->view('admin/layout/footer');
    }

    public function register()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/auth/register');
        $this->load->view('admin/layout/footer');
    }
    
    public function r_auth()
    {
        $this->r_rules();
		if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/layout/header');
                $this->load->view('admin/auth/register');
                $this->load->view('admin/layout/footer');
			} else {
			    $this->M_admin->add_register();
				redirect('admin/c_admin');
			}
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
