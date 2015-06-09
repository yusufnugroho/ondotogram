<?php

if (!defined('BASEPATH'))
    die();

class Home extends CI_Controller {

    public function index() {

        $this->load->view('dokter/include/header');
        $this->load->view('dokter/home');
        $this->load->view('dokter/include/footer');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
