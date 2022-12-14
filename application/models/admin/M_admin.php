<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_admin extends CI_Model 
{
    #STAND
    public function getstand()
    {
      $this->db->select('*');
		  $result = $this->db->get_where('user', array('level' => '2'));
		  return $result;
    }      
    
    #PENGUNJUNG
    public function getpengunjung()
    {
      $this->db->select('*');
      $result = $this->db->get_where('user', array('level' => '3'));
      return $result;
    }

    #TIKET
    public function datatiket()
    {
      date_default_timezone_set('Asia/Singapore');
      $today = date("Y-m-d");
      $this->db->order_by('id_tiket', 'desc');
      $result = $this->db->get_where('tiket', array('tanggal' => $today));
      return $result;
    }
    public function dataalltiket()
    {
      $this->db->select('*');
      $result = $this->db->get('tiket');
      return $result;
    }

    #TOP-UP
    public function tambahsaldo()
    {
      $topup = $this->input->post('jumlah');
      $idpelanggan = $this->input->post('id');
      $this->db->select('saldo');
      $this->db->from('saldo');
      $this->db->where('id_user', $idpelanggan);
      $query = $this->db->get();
      $sisa = $query->row()->saldo;
      $saldo = $sisa + $topup;
      $topup = array(
        'saldo' => $saldo,
        );
        $this->db->where('id_user', $this->input->post('id'));
        $result = $this->db->update('saldo', $topup);
        return $result;
    }
                        
}


/* End of file M_admin_model.php and path \application\models\admin\M_admin_model.php */
