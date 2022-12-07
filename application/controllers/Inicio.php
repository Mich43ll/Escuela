<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
    

    function __construct()
    {
          parent::__construct();
          $this->load->helper('html');
          $this->load->helper('url');

    }
    
    public function index()
    {
      $this->load->view('plantilla/nav');
      $this->load->view('inicio/inicio');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }    
}


