<?php

if (!defined('BASEPATH'))
    die();

class Home extends CI_Controller {

    public function index() {

        $this->load->view('admin/include/header');
        $this->load->view('admin/home');
        $this->load->view('admin/include/footer');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
