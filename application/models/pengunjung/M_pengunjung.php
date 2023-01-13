<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_pengunjung extends CI_Model 
{

    #SALDO
    public function getsaldo()
    {
        $user = $_SESSION['username'];
        $this->db->select('*');
        $result = $this->db->get_where('tb_saldo', array('username' => $user));
        return $result;
    }                        
    
    #TIKET
    public function beli_tiket()
    {
        $jmlh = $this->input->post('jumlah');
        for ($i=0; $i < $jmlh; $i++) { 
            $insert = array(
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('jam'),
                'tiket' => 'test',
                'status' => 'Invalid',
                );
            $result = $this->db->insert('tb_tiket', $insert);
        }
        return $result;
    }
}


/* End of file M_pengunjung_model.php and path \application\models\M_pengunjung_model.php */
