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

	public function getdata($id)
	{
		return $this->db->query("SELECT idAlumno, NombreCompleto, Direccion, Genero, Edad, Estado, idGrado FROM escuela.alumnos WHERE idAlumno = {$id}")->row();
	}
	public function update(int $idAlumno, string $NombreCompleto, string $Direccion, string $Genero, int $Edad, int $Estado, int $idGrado)
	{
		return $this->db->query("UPDATE escuela.alumnos SET NombreCompleto = {$NombreCompleto}, Direccion = {$Direccion}, Genero = {$Genero}, Edad = {$Edad}, Estado = {$Estado}, idGrado = {$idGrado} WHERE idAlumno = {$idAlumno}");
	}
	public function delete($id)
	{
		return $this->db->query("DELETE FROM escuela.alumnos  WHERE idAlumno = {$id}");
	}

}