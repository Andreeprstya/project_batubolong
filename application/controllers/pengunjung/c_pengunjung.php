<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pengunjung/header');
        $this->load->view('pengunjung/index');
        $this->load->view('pengunjung/footer');
        // $this->load->view('pengunjung/tampil');
    }
}

/* End of file Pengunjung.php and path \application\controllers\Pengunjung.php */