<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_stand extends CI_Model 
{
   #PROFILE

   public function getdetailprofile($id)
  {
      $this->db->where('id', $id);
      $result = $this->db->get('tb_user')->result_array();
      return $result[0];
  }

  public function editProfile($id)
  {
      $edit = array(
          'first_name' => $this->input->post('first_name'),
          'last_name' => $this->input->post('last_name'),
          'email' => $this->input->post('email'),
          'username' => $this->input->post('username'),
      );
      $this->db->where('id', $this->input->post('id'));
      $result = $this->db->update('tb_user', $edit);    
      return $result;
  }
   
    public function getmenu()
    {
        $id_stand = $_SESSION['id'];
        $this->db->select('*');
        $result = $this->db->get_where('tb_menu', array('id_stand' => $id_stand));
        return $result;
    }

    public function add_menu()
    {
    $config['upload_path']          = './img_menu/';
    $config['allowed_types']        = 'gif|jpg|jpeg|png';
    $config['max_size']             = 100000; // 1MB
    $config['max_width']            = 100000;
    $config['max_height']           = 100000;

    $this->load->library('upload');
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('gambar')) {
        return;
    } else {
        $id_stand = $_SESSION['id'];
        $gambar = $this->upload->data();
        $gambar = $gambar['file_name'];
        $insert = array(
            'id_menu' => $this->input->post('id_menu'),
            'nama_menu' => $this->input->post('nama_menu'),
            'harga' => $this->input->post('harga'),
            'kategori' => $this->input->post('tipe_menu'),
            'gambar' => $gambar,
            'id_stand' => $id_stand,
        );
        $this->db->insert('tb_menu', $insert);
        return $result;
    }
  }
  
  public function getdetailmenu($id)
  {
    $this->db->where('id_menu',$id);
		$result = $this->db->get('tb_menu') -> result_array();
		return $result[0];
  }

  public function editmenu()
  {
    $config['upload_path']          = './img_menu/';
    $config['allowed_types']        = 'gif|jpg|jpeg|png';
    $config['max_size']             = 100000; // 1MB
    $config['max_width']            = 100000;
    $config['max_height']           = 100000;

    $this->load->library('upload');
    $this->upload->initialize($config);

			if (!$this->upload->do_upload('gambar')) {
					$edit = array(
              'nama_menu' => $this->input->post('nama_menu'),
              'harga' => $this->input->post('harga'),
              'kategori' => $this->input->post('tipe_menu'),
              'gambar' => $this->input->post('gambarlama'),
						);
            $this->db->where('id_menu', $this->input->post('id_menu'));
            $result = $this->db->update('tb_menu', $edit);
            return $result;
				} else {
					$gambar = $this->upload->data();
					$gambar = $gambar['file_name'];
					$edit = array(
              'nama_menu' => $this->input->post('nama_menu'),
              'harga' => $this->input->post('harga'),
              'kategori' => $this->input->post('tipe_menu'),
              'gambar' => $gambar,
							);
              $this->db->where('id_menu', $this->input->post('id_menu'));
              $result = $this->db->update('tb_menu', $edit);
              return $result;
		    }
    }
    public function delete_menu($id)
    {
      $this->db->where('id_menu', $id);
      $result = $this->db->delete('tb_menu');
      return $result;
    }
                        
}


/* End of file M_stand.php_model.php and path \application\models\M_stand.php_model.php */
