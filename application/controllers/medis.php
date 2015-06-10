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
        
        
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/footer');
    }    
    public function addOdontogram() {
        $this->load->model('m_medis');
        $data['permukaan_gigi'] = $this->m_medis->get('permukaan_gigi');
        $data['bahan_restorasi'] = $this->m_medis->get('bahan_restorasi');
        $data['keadaan_gigi'] = $this->m_medis->get('keadaan_gigi');
        $data['protesa'] = $this->m_medis->get('protesa');
        $data['restorasi'] = $this->m_medis->get('restorasi');
        
        
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('odontogram',$data);
        $this->load->view('modalgigi',$data);
        $this->load->view('admin/include/footer');
    }        
    public function insert()
    {
        $this->load->model('m_medis');
        $var = $this->input->post('name');
        echo $var;

        if($var!="")
        {
            $this->m_medis->insert($var);
            $this->listOdontogram();
        }
        else{
            echo "NULL";
            $this->listOdontogram();
            
        }
    }
     public function listOdontogram()
    {
        $this->load->model('m_medis');
        $data['odontogram'] = $this->m_medis->getDataOdontogram();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/content/listOdontogram',$data);
        $this->load->view('admin/include/footer');
    }
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
