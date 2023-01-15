<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_admin');
    }

    public function index()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/body');
            $this->load->view('layout/footer');
        }
    }

    #STAND
    public function stand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['stand'] = $this->M_admin->getstand();
            $this->load->view('layout/header');
            $this->load->view('admin/stand', $data);
            $this->load->view('layout/footer');
        }
    }
    public function edit_stand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['stand'] = $this->M_admin->getstand();
            $this->load->view('layout/header');
            $this->load->view('admin/edit_stand');
            $this->load->view('layout/footer');
        }
    }
    
    public function tambah_stand()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/tambah_stand');
            $this->load->view('layout/footer');
        }
    }

    public function r_rules()
	{
		$this->form_validation->set_rules('nama_stand','nama_stand','required');
		$this->form_validation->set_rules('nama_pemilik','nama_pemilik','required');
		$this->form_validation->set_rules('tipe_stand','tipe_stand','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');
		//$this->form_validation->set_rules('gambar','gambar','required');
	}
    
    public function prosestambah_stand()
    {
        $this->r_rules();
		if ($this->form_validation->run() == FALSE) {
                $this->load->view('layout/header');
                $this->load->view('admin/tambah_stand');
                $this->load->view('layout/footer');
			} else {
			    $this->M_admin->add_register_stand();
				redirect('admin/c_admin/stand');
			}
    }

    #PENGUNJUNG
    public function pengunjung()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['pengunjung'] = $this->M_admin->getpengunjung();
            $this->load->view('layout/header');
            $this->load->view('admin/pengunjung', $data);
            $this->load->view('layout/footer');
        }
    }
    public function x_rules()
	{
		$this->form_validation->set_rules('first_name','first_name','required');
		$this->form_validation->set_rules('last_name','last_name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('level','level','required');
       
	}
    public function tambah_pengunjung()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/tambah_pengunjung');
            $this->load->view('layout/footer');
        }
    }
    public function prosestambah_pengunjung()
    {
        $this->x_rules();
		if ($this->form_validation->run() == FALSE) {
                $this->load->view('layout/header');
                $this->load->view('admin/tambah_pengunjung');
                $this->load->view('layout/footer');
			} else {
			    $this->M_admin->add_register_pengunjung();
				redirect('admin/c_admin/pengunjung');
			}
    }

    #TIKET
    public function tiket()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['tiket'] = $this->M_admin->datatiket();
            $this->load->view('layout/header');
            $this->load->view('admin/tiket', $data);
            $this->load->view('layout/footer');
        }
    }
    public function alltiket()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $data['tiket'] = $this->M_admin->dataalltiket();
            $this->load->view('layout/header');
            $this->load->view('admin/tiket', $data);
            $this->load->view('layout/footer');
        }
    }

    #PENDAPATAN
    public function pendapatan()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/body');
            $this->load->view('layout/footer');
        }
    }

    #TOP-UP
    public function topup()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/topup');
            $this->load->view('layout/footer');
        }
    }
    public function nontunai()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/nontunai');
            $this->load->view('layout/footer');
        }
    }

    public function topup_rules()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|numeric|greater_than_equal_to[10000]');
    }
    public function prosestopup()
    {
        $this->topup_rules();
        if ($this->form_validation->run() == FALSE) {
            if (!isset($_SESSION['username'])) {
                redirect('index');
            } else {
                $this->load->view('layout/header');
                $this->load->view('admin/topup');
                $this->load->view('layout/footer');
            }
        } else {
            $this->M_admin->tambahsaldo();
            redirect('admin/c_admin/topup');
        }
    }

    #SCAN
    public function scan()
    {
        if (!isset($_SESSION['username'])) {
            redirect('index');
        } else {
            $this->load->view('layout/header');
            $this->load->view('admin/scan');
            $this->load->view('layout/footer');
        }
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */