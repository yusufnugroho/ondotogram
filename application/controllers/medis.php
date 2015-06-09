<?php

if (!defined('BASEPATH'))
    die();

class Medis extends Main_Controller {

    public function index() {
        $this->load->model('m_medis');
        $data['permukaan_gigi'] = $this->m_medis->get('permukaan_gigi');
        $data['bahan_restorasi'] = $this->m_medis->get('bahan_restorasi');
        $data['keadaan_gigi'] = $this->m_medis->get('keadaan_gigi');
        $data['protesa'] = $this->m_medis->get('protesa');
        $data['restorasi'] = $this->m_medis->get('restorasi');
        
        $this->load->view('include/header');
        $this->load->view('odontogram',$data);
        $this->load->view('modalgigi',$data);
        $this->load->view('include/footer');
    }    
    
    public function insert()
    {
        $var = $this->input->post('demo18');
        echo $var;
        echo "a";
    }
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
