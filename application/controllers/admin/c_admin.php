<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/body');
        $this->load->view('admin/footer');
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
