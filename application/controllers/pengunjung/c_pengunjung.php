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
    }

    public function stand()
    {
        $this->load->view('pengunjung/header');
        $this->load->view('pengunjung/stand');
        $this->load->view('pengunjung/footer');
    }

    public function menustand()
    {
        $this->load->view('pengunjung/header');
        $this->load->view('pengunjung/menustand');
        $this->load->view('pengunjung/footer');
    }

    public function ticket()
    {
        $this->load->view('pengunjung/header');
        $this->load->view('pengunjung/ticket');
        $this->load->view('pengunjung/footer');
    }

    public function tunai()
    {
        $this->load->view('pengunjung/header');
        $this->load->view('pengunjung/tunai');
        $this->load->view('pengunjung/footer');
    }

    public function nontunai()
    {
        $this->load->view('pengunjung/header');
        $this->load->view('pengunjung/nontunai');
        $this->load->view('pengunjung/footer');
    }

    public function history()
    {
        $this->load->view('pengunjung/header');
        $this->load->view('pengunjung/history');
        $this->load->view('pengunjung/footer');
    }
}

/* End of file Pengunjung.php and path \application\controllers\Pengunjung.php */