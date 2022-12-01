<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if($this->session->userdata('username')){
            redirect('Inicio');
        }
        if (isset($_POST['password'])) {
            $this->load->model('login_model');
            if($this->login_model->login($_POST['username'],$_POST['password'])){
                $this->session->set_userdata('username',$_POST['username']);
                redirect('Inicio');
            }else{
                redirect('login');
            }
            
        }
        $this->load->view('plantilla/head');
            $this->load->view('login/inicio');
            $this->load->view('plantilla/scripts');
            $this->load->view('plantilla/end');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
