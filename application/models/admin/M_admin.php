<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_admin extends CI_Model 
{
    public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');
         
		$result = $this->db
						->where('username', $username)
						->or_where('email', $username)
						->where('password', md5($password))
						->limit(1)
						->get('user');

		if ($result->num_rows() > 0) {
			return $result->row();
		}else{
			return FALSE;
		}
	}

    public function add_register()
    {
        $insert = array(
            'id' => $this->input->post('id'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => '1'
            );
            $result = $this->db->insert('user', $insert);
            return $result;
    }                 
                        
}


/* End of file M_admin_model.php and path \application\models\admin\M_admin_model.php */
