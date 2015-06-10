<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __Construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_dokter');
        $this->load->model('m_pasien');
        
    }
    public function index() 
    {
        //print_r($_SESSION);
        if($_SESSION==NULL)
        {
            //$this->logout();
            redirect("home/logout");
        }
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
    
    public function activeDokter($id_dokter)
    {       
            $this->m_dokter->active($id_dokter);
            $this->listDokter();
    }
    public function deactiveDokter($id_dokter)
    {
            $this->m_dokter->deactive($id_dokter);
            $this->listDokter();
    }
    /*Pasien */
    public function activePasien($id_dokter)
    {       
            $this->m_pasien->active($id_dokter);
            $this->listPasien();
    }
    public function deactivePasien($id_dokter)
    {
            $this->m_pasien->deactive($id_dokter);
            $this->listPasien();
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
            $this->listDokter();
           
    }
    public function addPasien()
    {		

            $this->load->view('admin/include/header');
            $this->load->view('admin/include/navbar');
            $this->load->view('admin/content/addPasien');
            $this->load->view('admin/include/footer');
    }
    //Insert Function For New Doctor
    public function insertPasien()
    {

            $user_pasien = $this->input->post('user_pasien');
            $password_pasien = $this->input->post('password_pasien');
            $nama_lengkap_pasien = $this->input->post('nama_lengkap_pasien');
            $identitas_pasien = $this->input->post('identitas_pasien');
            $tanggal_lahir_pasien = $this->input->post('tanggal_lahir_pasien');
            $jenis_kelamin_pasien = $this->input->post('jenis_kelamin_pasien');
            $alamat_pasien = $this->input->post('alamat_pasien');
            $hp_pasien = $this->input->post('hp_pasien');
            if($user_pasien!=NULL && $identitas_pasien!=NULL && $nama_lengkap_pasien!=NULL)
            {
                $this->m_pasien->insert($user_pasien,$password_pasien,$nama_lengkap_pasien,$identitas_pasien,$tanggal_lahir_pasien,$jenis_kelamin_pasien,
                    $alamat_pasien,$hp_pasien);
            }
            else{
                
                echo "<script>alert('data tidak lengkap')</script>";
                $this->listPasien();
            }
            $this->listPasien();
           
    }
    public function hapusPasien($param)
    {
        $this->m_pasien->hapusPasien($param); 
        $this->listPasien();
    }

    

}


