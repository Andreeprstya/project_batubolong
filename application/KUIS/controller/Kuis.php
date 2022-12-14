<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Kuis');
	}
	public function index()
	{
		$data['gaji'] = $this->M_Kuis->getGaji();
		$this->load->view('kuis', $data);
	}
	public function tambah()
	{
		$data['gaji'] = $this->M_Kuis->insertGaji();
		$this->load->view('kuis_tambah');	
	}
	public function add()
	{
		$this->M_Kuis->insertGaji();
		redirect('Kuis');
	}

}

/* End of file kuis.php */
/* Location: ./application/controllers/kuis.php */