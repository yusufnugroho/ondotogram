<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __Construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_dokter');
        $this->load->model('m_pasien');
        
    }
    public function index() {

        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/footer');
    }
    
    public function listDokter()
    {
        $data['dokter'] = $this->m_dokter->getDataDokter();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/content/listDokter',$data);
        $this->load->view('admin/include/footer');
    }
    public function listPasien()
    {
        $data['pasien'] = $this->m_pasien->getDataPasien();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/content/listPasien',$data);
        $this->load->view('admin/include/footer');
    }
    public function active($id_dokter)
    {       
            $this->m_dokter->active($id_dokter);
            $this->listDokter();
    }
    public function deactive($id_dokter)
    {
            $this->m_dokter->deactive($id_dokter);
            $this->listDokter();
    }
    //Show Add New Doctor
    public function addDokter()
    {		

            $this->load->view('admin/include/header');
            $this->load->view('admin/include/navbar');
            $this->load->view('admin/content/addDokter');
            $this->load->view('admin/include/footer');
    }
    //Insert Function For New Doctor
    public function insertDokter()
    {

            $user_dokter = $this->input->post('user_dokter');
            $password_dokter = $this->input->post('password_dokter');
            $nama_lengkap_dokter = $this->input->post('nama_lengkap_dokter');
            $identitas_dokter = $this->input->post('identitas_dokter');
            $jenis_kelamin_dokter = $this->input->post('jenis_kelamin_dokter');
            $alamat_dokter = $this->input->post('alamat_dokter');
            $hp_dokter = $this->input->post('hp_dokter');
            $this->m_dokter->insert($user_dokter,$password_dokter,$nama_lengkap_dokter,$identitas_dokter,$jenis_kelamin_dokter,
                    $alamat_dokter,$hp_dokter);
            $this->index();
           
    }


    

}
/*

 * <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mente extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
	}

	public function index()
	{
		$data['mente'] = $this->m_mente->getDataMente();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/indexMente',$data);
                $this->load->view('dashboard/footer');
	}
	public function addmente()
	{		
		$data['mentor'] = $this->m_mentor->getDataMentorActive();
		$data['dosen'] = $this->m_dosen->getDataDosen();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/addMente',$data);
                $this->load->view('dashboard/footer');
        }
	public function update($NRP)
	{
		$data['all'] = $this->m_mente->getData($NRP);
		$data['mentor'] = $this->m_mentor->getDataMentorActive();
		$data['dosen'] = $this->m_dosen->getDataDosenActive();
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/updateMente',$data);
                $this->load->view('dashboard/footer');
	}
        public function updateNilai($nrp)
        {
                $data['mente'] = $this->m_mente->getData($nrp);
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/navbar');
		$this->load->view('mente/updateNilai',$data);
                $this->load->view('dashboard/footer');
        }
        public function active($nrp)
	{
		$this->m_mente->active($nrp);
		$this->index();
	}
        public function deactive($nrp)
	{
		$this->m_mente->deactive($nrp);
		$this->index();
	}
	public function Hapus($nrp)
	{
		$this->m_mente->hapusMente($nrp);
		$this->index();
	}

	public function insertmente()
	{
		$nrpmente = $this->input->post('nrpmente');
		$nrpmentor = $this->input->post('nrpmentor');
		$nipdosen = $this->input->post('nipdosen');
		$depanmente = $this->input->post('frontname');
		$belakangmente = $this->input->post('endname');
		$jkmente = $this->input->post('jkmente');
		$hpmente = $this->input->post('hpmente');
		$this->m_mente->insert($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$jkmente,$hpmente);
		$this->index();
	}
	public function updatemente($nrpmente)
	{
		$nrpmentor = $this->input->post('nrpmentor');
		$nipdosen = $this->input->post('nipdosen');
		$depanmente = $this->input->post('frontname');
		$belakangmente = $this->input->post('endname');
		$hpmente = $this->input->post('hpmente');
                $jkmente = $this->input->post('jkmente');
		$this->m_mente->update($nrpmente,$nrpmentor,$nipdosen,$depanmente,$belakangmente,$hpmente,$jkmente);
		$this->index();
	}
	public function updateNilaiReady($nrpmente)
	{
		$nilai = $this->input->post('nilai');
           	$this->m_mente->updateNilai($nrpmente,$nilai);
		$this->index();
	}
        
}

 */

