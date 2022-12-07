<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notas_model extends CI_Model {
    public function __construct()
	{
		$this->load->database();
	}
	public function show($filtros = FALSE)
	{
		if($filtros === FALSE){
            $query = $this->db->get('escuela.controlnotas');
            return $query->result_array();
        }
        $query = $this->db->get_where('controlnotas', $filtros);
        return $query->row_array();
	}
	public function save(array $datos)
	{
		return $this->db->insert("escuela.controlnotas", $datos);
	}

	public function getdata($id)
	{
		return $this->db->query("SELECT idNotas, primerParcial, segundoParcial, tercerParcial, idClase, idAlumno, idEmpleado FROM escuela.controlnotas WHERE idNotas = {$id}")->row();
	}
	public function update(int $idNotas, int $primerParcial, int $segundoParcial, int $tercerParcial, int $idClase, int $idAlumno,int $idEmpleado)
	{
		return $this->db->query("UPDATE escuela.controlnotas SET primerParcial = {$primerParcial}, segundoParcial = {$segundoParcial}, tercerParcial = {$tercerParcial}, idClase = {$idClase}, idAlumno = {$idAlumno}, idEmpleado ={$idEmpleado} WHERE idNotas = {$idNotas}");
	}

	public function delete($id)
	{
		return $this->db->query("DELETE FROM escuela.controlnotas  WHERE idNotas = {$id}");
	}


}