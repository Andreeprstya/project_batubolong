<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_pengunjung extends CI_Model 
{
    public function getsaldo()
    {
        $user = $_SESSION['username'];
        $this->db->select('*');
        $result = $this->db->get_where('tb_saldo', array('username' => $user));
        return $result;
    }                        
                        
}


/* End of file M_pengunjung_model.php and path \application\models\M_pengunjung_model.php */
