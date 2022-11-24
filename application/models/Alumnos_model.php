<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos_model extends CI_Model {
    public function __construct()
	{
		$this->load->database();
	}
	public function listar($filtros = FALSE)
	{
		if($filtros === FALSE){
            $query = $this->db->get('escuela.alumnos');
            return $query->result_array();
        }
        $query = $this->db->get_where('alumnos', $filtros);
        return $query->row_array();
	}
}