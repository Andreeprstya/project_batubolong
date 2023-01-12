<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengunjung');
        
    }
 

    public function index()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/index');
            $this->load->view('pengunjung/footer');
        }

    }

    public function stand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo']=$this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/stand',$data);
            $this->load->view('pengunjung/footer');
        }
    }

    public function menustand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/menustand');
            $this->load->view('pengunjung/footer');
        }
    }

    public function ticket()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo']=$this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/ticket',$data);
            $this->load->view('pengunjung/footer');
        }
    }

    public function tunai()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/tunai');
            $this->load->view('pengunjung/footer');
        }
    }

    public function nontunai()
    {   
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/nontunai');
            $this->load->view('pengunjung/footer');
        }
    }

    public function history()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/history');
            $this->load->view('pengunjung/footer');
        }
    }
}

/* End of file Pengunjung.php and path \application\controllers\Pengunjung.php */