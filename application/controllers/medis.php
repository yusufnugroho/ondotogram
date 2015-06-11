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
    public function insert($no)
    {
        $this->load->model('m_medis');
        $max = $this->m_medis->max();
        if($no==1){
            $var = $this->input->post('name');
            $max = $max +1;
            //Random String Generator -> ID_REKAM DUMMY
            
            //$original_string = '1234567890';
            //$random_string = get_random_string($original_string, 16);
            $random_string = rand(1,1000000);
            $dataG18 = array(
                'G18' => $this->input->post('name'),
                'id_rekam' => $max);
            //echo "This Is Var : ".$var;
            $varLength = strlen($var);
            $sampleVar  = "- - - -";
            
            //Debug ON
            //echo strlen($sampleVar);
            //echo "Panjang Character :".$varLength;
            //if($var!="" && $varLength >= 7)

            //$var = $this->input->post('a');
            echo $var;
            //echo "A";
            
            //TEMP :            '11' //=> //ini diisi inputannya dr ajax, td belum berhasil kayaknya cup ._.
            /* Masih Belum Dibenerin
             * 
             */

            //Tinggal ngelakuin ini cup, udah selesai terusan
            //$this->m_medis->insert('medis',$data);
     
            if($dataG18!=NULL && $dataG18!="" && $dataG18!=0)
            {
                $this->m_medis->insert($dataG18);
            }
        }
        else if($no==2)
        {

            $data = array(
                'occlusi' => $this->input->post('occlusi'),
                'torus_palatinus' => $this->input->post('TP'),
                'torus_mandibularis' => $this->input->post('TM'),
                'palatum' => $this->input->post('palatum'),
                'diastema' => $this->input->post('diastema'),
                'gigi_anomali' => $this->input->post('anomali'),
                'lain_lain' => $this->input->post('lain')
                );
            $this->m_medis->insert2($max,$data);
            $this->listOdontogram();
        }
    }
    public function insert2()
    {
        
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
        $this->listOdontogram();
        
    }
    public function get_random_string($valid_chars, $length)
    {
        // start with an empty random string
        $random_string = "";

        // count the number of chars in the valid chars string so we know how many choices we have
        $num_valid_chars = strlen($valid_chars);

        // repeat the steps until we've created a string of the right length
        for ($i = 0; $i < $length; $i++)
        {
            // pick a random number from 1 up to the number of valid chars
            $random_pick = mt_rand(1, $num_valid_chars);

            // take the random character out of the string of valid chars
            // subtract 1 from $random_pick because strings are indexed starting at 0, and we started picking at 1
            $random_char = $valid_chars[$random_pick-1];

            // add the randomly-chosen char onto the end of our string so far
            $random_string .= $random_char;
        }

        // return our finished random string
        return $random_string;
        
    }
    public function cari()
    {
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/content/odontogramPasien');
        $this->load->view('admin/include/footer');
    }
    public function odo()
    {
        $this->load->model('m_medis');
        $id = $this->input->post('id');
        $data['gigi'] = $this->m_medis->getOne($id);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/content/odontogramPasien',$data);
        $this->load->view('admin/include/footer');
    }
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
