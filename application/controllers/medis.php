<?php

if (!defined('BASEPATH'))
    die();

class Medis extends Main_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_medis');

	}
    public function index() 
    {
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
    public function addOdontogram() 
    {
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
        //echo "This Is Var : ".$var;
        $varLength = strlen($var);
        $sampleVar  = "- - - -";
        
        //Debug ON
        //echo strlen($sampleVar);
        //echo "Panjang Character :".$varLength;
        if($var!="" && $varLength >= 7)
        {
            $this->m_medis->insert($var);
            $this->listOdontogram();
        }
        else{
            //echo "NULL";
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
    public function deleteOdontogram($param)
    {
       
        $this->m_medis->deleteOdontogram($param);
        $this->index();
        
    }
    
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
