<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clases_model extends CI_Model {
    public function __construct()
	{
		$this->load->database();
	}
	public function show($filtros = FALSE)
	{
		if($filtros === FALSE){
            $query = $this->db->get('escuela.clase');
            return $query->result_array();
        }
        $query = $this->db->get_where('clase', $filtros);
        return $query->row_array();
	}
	public function save(array $datos)
	{
		return $this->db->insert("escuela.clase", $datos);
	}

	public function getdata($id)
	{
		return $this->db->query("SELECT idClase,NombreClase, Estado, idEmpleado FROM escuela.clase WHERE idClase = {$id}")->row();
	}
	public function update(int $idClase, string $NombreClase, int $Estado, int $idEmpleado)
	{
		return $this->db->query("UPDATE escuela.clase SET NombreClase = {$NombreClase}, Estado = {$Estado}, idEmpleado = {$idEmpleado} WHERE idClase = {$idClase}");
	}
	public function delete($id)
	{
		return $this->db->query("DELETE FROM escuela.clase  WHERE idClase = {$id}");
	}

}