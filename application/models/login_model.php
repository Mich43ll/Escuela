<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password){
        /*si devuelve una fila es por que existe */
        $this->db->where('Usuario',$username);
        $this->db->where('Contraseña',$password);
        $q= $this->db->get('escuela.usuario');
        if($q->num_rows()>0)
        {
            return true;
        }else{
            return false;
        }

    }
}