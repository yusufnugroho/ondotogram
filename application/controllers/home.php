<?php
session_start();
if (!defined('BASEPATH'))
    die();

class Home extends Main_Controller {

    public function index() {
        $this->load->view('include/header');
        $this->load->view('home');
        //$this->load->view('include/footer');
    }
    public function login(){
        $this->load->view('include/header');
        $this->load->view('templates/login');
        //$this->load->view('include/footer');
        
    }
    public function loginAdmin(){
        //$this->load->view('include/header');
        //$this->load->view('include/header');
        //$this->load->view('include/header');
    
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        
        if($username =="admin" && $password =="admin")
        {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            
            
            redirect("admin");
        }
        else{
            redirect("home");
        }
    }
    public function logout()
    {
        //Debug ON Session Part
        session_unset();
        session_destroy();
        $this->session->sess_destroy();
        $this->session->set_flashdata('keterangan', 'telah logout');
        redirect('home');
    }
    
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
