<?php
defined('BASEPATH') or exit('No direct script access allowed');

class index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth/M_auth');
        
    }
   
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('auth/login');
        $this->load->view('layout/footer');
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
		$this->form_validation->set_rules('type','type','required');
	}

    public function auth()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header');
            $this->load->view('auth/login');
            $this->load->view('layout/footer');
		}else{
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));

			$cek = $this->M_auth->cek_login($username, $password);

			if ($cek == FALSE) {
				echo "<SCRIPT language=Javascript>
					  alert('Login Anda Gagal,  username dan password tidak valid. Silahkan Ulangi Lagi')
					  </script>";
					  echo "<meta http-equiv='refresh' content='0'; url=<?= base_url('auth')?>>";
			}else{
				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('level', $cek->level);
				switch ($cek->level) {
					case 1 : 	redirect('admin/c_admin');  //admin
								break;
					case 2 : 	redirect('stand/c_stand');  //stand
								break;
                    case 2 : 	redirect('pengunjung/c_pengunjung');  //pengunjung
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

    public function register()
    {
        $this->load->view('layout/header');
        $this->load->view('auth/register');
        $this->load->view('layout/footer');
    }
    
    public function r_auth()
    {
        $this->r_rules();
		if ($this->form_validation->run() == FALSE) {
                $this->load->view('layout/header');
                $this->load->view('auth/register');
                $this->load->view('layout/footer');
			} else {
			    $this->M_auth->add_register();
				redirect('index');
			}
    }
}

/* End of file Pengunjung.php and path \application\controllers\Pengunjung.php */