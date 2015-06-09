<?php

if (!defined('BASEPATH'))
    die();

class Medis extends Main_Controller {

    public function index() {
        $this->load->view('include/header');
        $this->load->view('odontogram');
        $this->load->view('modalgigi');
        $this->load->view('include/footer');
    }    
    
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
