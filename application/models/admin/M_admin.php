<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_admin extends CI_Model 
{
    public function getstand()
    {
        $this->db->select('*');
		$result = $this->db->get_where('user', array('level' => '2'));
		return $result;
    }      
    
    public function getpengunjung()
    {
        $this->db->select('*');
		$result = $this->db->get_where('user', array('level' => '3'));
		return $result;
    }
                        
}


/* End of file M_admin_model.php and path \application\models\admin\M_admin_model.php */
