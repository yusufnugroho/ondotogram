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
        $var = $this->input->post('a');
        echo $var;
        //echo "A";
        $data = array(
            '11' => //ini diisi inputannya dr ajax, td belum berhasil kayaknya cup ._.
            'occlusi' => $this->input->post('occlusi'),
            'torus_palatinus' => $this->input->post('TP'),
            'torus_mandibularis' => $this->input->post('TM'),
            'palatum' => $this->input->post('palatum'),
            'diastema' => $this->input->post('diastema'),
            'gigi_anomali' => $this->input->post('anomali'),
            'lain_lain' => $this->input->post('lain')
            );

        //Tinggal ngelakuin ini cup, udah selesai terusan
        //$this->m_medis->insert('medis',$data);
 
        /*if($var!="")
        {
            $this->m_medis->insert($var);
            $this->listOdontogram();
        }
        else{
            echo "NULL";
            //$this->listOdontogram();
            
        }*/
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
