<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matricula_model extends CI_Model {
    public function __construct()
	{
		$this->load->database();
	}
	public function show($filtros = FALSE)
	{
		if($filtros === FALSE){
            $query = $this->db->get('escuela.matriculas');
            return $query->result_array();
        }
        $query = $this->db->get_where('matriculas', $filtros);
        return $query->row_array();
	}
	public function save(array $datos)
	{
		return $this->db->insert("escuela.matriculas", $datos);
	}

	public function getdata($id)
	{
		return $this->db->query("SELECT idMatricula, IdAlumno, Jornada, idGrado FROM escuela.matriculas WHERE idMatricula = {$id}")->row();
	}
	public function update(int $idMatricula, int $IdAlumno, string $Jornada, int $idGrado)
	{
		return $this->db->query("UPDATE escuela.matriculas SET IdAlumno = {$IdAlumno}, Jornada = {$Jornada}, idGrado = {$idGrado} WHERE idMatricula = {$idMatricula}");
	}
	public function delete($id)
	{
		return $this->db->query("DELETE FROM escuela.matriculas  WHERE idMatricula = {$id}");
	}



}