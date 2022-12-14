<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kuis extends CI_Model {
	public $variable;
	public function __construct()
	{
	parent::__construct();
	}
	public function getGaji()
	{
		$result = $this->db->get('gaji');
		return $result;
	}
	public function insertGaji()
	{
		$insert = array(
		'nama' => $this->input->post('nama'),
		'jabatan' => $this->input->post('jabatan'),
		'jlmh_hari_kerja' => $this->input->post('jlmh_hari_kerja'),
		'gaji' => $this->input->post('gaji')
		);
		$result = $this->db->insert('gaji', $insert);
		return $result;
	}

}

/* End of file m_Kuis.php */
/* Location: ./application/models/m_Kuis.php */