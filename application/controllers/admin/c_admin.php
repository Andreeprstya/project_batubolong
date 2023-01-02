<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_admin');
    }   

    public function index()
    {    
        if(!isset($_SESSION['username'])){
		    redirect('index');
        }else{
        $this->load->view('layout/header');
        $this->load->view('admin/body');
        $this->load->view('layout/footer');
        }
        
    }

}

/* End of file Admin.php and path \application\controllers\Admin.php */
