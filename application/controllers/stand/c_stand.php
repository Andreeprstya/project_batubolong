<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_stand extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if(!isset($_SESSION['username'])){
		    redirect('index');
        }else{
        $this->load->view('layout_stand/header');
        $this->load->view('stand/body');
        $this->load->view('layout_stand/footer');
        }
    }
    public function menu_barang()
    {
        $this->load->view('layout_stand/header');
        $this->load->view('stand/menu_barang');
        $this->load->view('layout_stand/footer');
    }
    public function laporan()
    {
        $this->load->view('layout_stand/header');
        $this->load->view('stand/laporan');
        $this->load->view('layout_stand/footer');
    }
    public function pendapatan()
    {
        $this->load->view('layout_stand/header');
        $this->load->view('stand/pendapatan');
        $this->load->view('layout_stand/footer');
    }
}

/* End of file C_stand.php and path \application\controllers\C_stand.php */
