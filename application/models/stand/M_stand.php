<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_stand extends CI_Model 
{
    public function getmenu()
    {
        $this->db->select('*');
        $result = $this->db->get_where('tb_menu');
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
                        
}


/* End of file M_stand.php_model.php and path \application\models\M_stand.php_model.php */
