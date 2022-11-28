<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos_model extends CI_Model {
    public function __construct()
	{
		$this->load->database();
	}
	public function show($filtros = FALSE)
	{
		if($filtros === FALSE){
            $query = $this->db->get('escuela.alumnos');
            return $query->result_array();
        }
        $query = $this->db->get_where('alumnos', $filtros);
        return $query->row_array();
	}
	public function save(array $datos)
	{
		return $this->db->insert("escuela.alumnos", $datos);
	}
	public function edit(array $datos)
	{
		return $this->db->insert("escuela.alumnos", $datos);
	}
}