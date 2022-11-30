<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados_model extends CI_Model {
    public function __construct()
	{
		$this->load->database();
	}
	public function show($filtros = FALSE)
	{
		if($filtros === FALSE){
            $query = $this->db->get('escuela.empleados');
            return $query->result_array();
        }
        $query = $this->db->get_where('empleados', $filtros);
        return $query->row_array();
	}
	public function save(array $datos)
	{
		return $this->db->insert("escuela.empleados", $datos);
	}

	public function getdata($id)
	{
		return $this->db->query("SELECT idEmpleado, NombreCompleto, idCargo, Direccion, Telefono, Estado FROM escuela.empleados WHERE idEmpleado = {$id}")->row();
	}
	public function update(int $idEmpleado, string $NombreCompleto, string $idCargo, string $Direccion, int $Telefono, int $Estado)
	{
		return $this->db->query("UPDATE escuela.empleados SET NombreCompleto = {$NombreCompleto}, idCargo = {$idCargo}, Direccion = {$Direccion}, Telefono = {$Telefono}, Estado = {$Estado} WHERE idEmpleado = {$idEmpleado}");
	}
	public function delete($id)
	{
		return $this->db->query("DELETE FROM escuela.empleados  WHERE idEmpleado = {$id}");
	}

}