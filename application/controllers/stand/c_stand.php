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
        }elseif($_SESSION['type']=="Penyewaan"){
            $this->load->view('layout_stand/fasilitas_header');
            $this->load->view('stand/fasilitas_body');
            $this->load->view('layout/footer');
        }elseif($_SESSION['type']=="Resto") {
            $this->load->view('layout_stand/resto_header');
            $this->load->view('stand/resto_body');
            $this->load->view('layout/footer');
        }
    }

    #RESTO
    public function menu()
    {
        $this->load->view('layout_stand/resto_header');
        $this->load->view('stand/menu');
        $this->load->view('layout_stand/footer');
    }
    public function laporan_resto()
    {
        $this->load->view('layout_stand/resto_header');
        $this->load->view('stand/laporan');
        $this->load->view('layout_stand/footer');
    }
    public function pendapatan_resto()
    {
        $this->load->view('layout_stand/resto_header');
        $this->load->view('stand/pendapatan');
        $this->load->view('layout_stand/footer');
    }

    #PENYEWAAN
    public function barang()
    {
        $this->load->view('layout_stand/fasilitas_header');
        $this->load->view('stand/menu_barang');
        $this->load->view('layout_stand/footer');
    }
    public function laporan_penyewaan()
    {
        $this->load->view('layout_stand/fasilitas_header');
        $this->load->view('stand/laporan');
        $this->load->view('layout_stand/footer');
    }
    public function pendapatan_penyewaan()
    {
        $this->load->view('layout_stand/fasilitas_header');
        $this->load->view('stand/pendapatan');
        $this->load->view('layout_stand/footer');
    }
}

/* End of file C_stand.php and path \application\controllers\C_stand.php */
