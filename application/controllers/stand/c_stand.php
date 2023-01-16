<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_stand extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('stand/M_stand');
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

    #RESTORAN
    #MENU
    public function menu()
    {
        if(!isset($_SESSION['username'])){
		    redirect('index');
        }else{
            $data['menu']=$this->M_stand->getmenu();
            $this->load->view('layout_stand/resto_header');
            $this->load->view('stand/menu',$data);
            $this->load->view('layout_stand/footer');
        }
    }
    public function tambahmenu()
    {
        if(!isset($_SESSION['username'])){
		    redirect('index');
        }else{
            $this->load->view('layout_stand/resto_header');
            $this->load->view('stand/tambah_menu');
            $this->load->view('layout_stand/footer');
        }
    }
    public function r_rules()
    {
        $this->form_validation->set_rules('nama_menu', 'nama_menu', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('tipe_menu', 'tipe_menu', 'required');
        //$this->form_validation->set_rules('gambar','gambar','required');
    }
    public function prosestambah_stand()
    {
        $this->r_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout_stand/resto_header');
            $this->load->view('stand/tambah_menu');
            $this->load->view('layout_stand/footer');
        } else {
            $this->M_stand->add_menu();
            redirect('stand/c_stand/menu');
        }
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
        if(!isset($_SESSION['username'])){
		    redirect('index');
        }else{
            $this->load->view('layout_stand/fasilitas_header');
            $this->load->view('stand/menu_barang');
            $this->load->view('layout_stand/footer');
        }
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
