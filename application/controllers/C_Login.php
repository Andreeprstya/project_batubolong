<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('M_login');
        
    }
   
    public function login()
    {
        $this->load->view('form_login');
        // $this->load->view('pengunjung/tampil');
    }
}

/* End of file Pengunjung.php and path \application\controllers\Pengunjung.php */