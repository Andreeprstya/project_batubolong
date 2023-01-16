<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengunjung/M_pengunjung');
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

    #STAND
    public function stand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $data['stand'] = $this->M_pengunjung->getstand();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/stand', $data);
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
    public function detail_stand($id)
    {
        $this->db->select('tipe_stand');
        $query=$this->db->get_where('tb_stand',array('id_stand'=>$id));
        $tipe=$query->row()->tipe_stand;
        if(!isset($_SESSION['username'])){
		    redirect('index');
        }elseif($tipe=="Penyewaan"){
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $data['stand'] = $this->M_pengunjung->getstand_sewa($id);
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/detail_stand_sewa',$data);
            $this->load->view('pengunjung/footer');
        }elseif($tipe=="Resto") {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $data['stand'] = $this->M_pengunjung->getdetailstand($id);
            $data['menu'] = $this->M_pengunjung->getstand_menu($id);
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/detail_stand_menu',$data);
            $this->load->view('pengunjung/footer');
        }
    }

    #TIKET
    public function ticket()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/ticket', $data);
            $this->load->view('pengunjung/footer');
        }
    }
    public function belitiket()
    {
        $cek_saldo = $this->M_pengunjung->beli_tiket();
        if ($cek_saldo === NULL) {
            echo "<SCRIPT language=Javascript>
			        alert('Saldo Lu Gak Cukup Tolol!, Sana Top-up Dulu!')
		        </script>";
            echo "<meta http-equiv='refresh' content='0'; url=<?= base_url('auth')?>>";
        } else {
            // $this->M_pengunjung->beli_tiket();
            redirect('pengunjung/c_pengunjung/ticket');
        }

        // $this->t_rules();
        // if ($this->form_validation->run() == FALSE) {
        // $this->load->view('auth/header');
        // $this->load->view('auth/register_pengunjung');
        // $this->load->view('layout/footer');
        // } else {
        // $this->M_pengunjung->beli_tiket();
        // redirect('index');
        // }
    }

    public function tunai()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/tunai',$data);
            $this->load->view('pengunjung/footer');
        }
    }

    public function nontunai()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/nontunai',$data);
            $this->load->view('pengunjung/footer');
        }
    }
    #HISTORY
    public function history()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['saldo'] = $this->M_pengunjung->getsaldo();
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/history',$data);
            $this->load->view('pengunjung/footer');
        }
    }
    public function profile()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('pengunjung/header');
            $this->load->view('pengunjung/profile');
            $this->load->view('pengunjung/footer');
        }
    }
   
}

/* End of file Pengunjung.php and path \application\controllers\Pengunjung.php */