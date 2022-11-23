<?php

class empleadosController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/empleadosModel.php");
        $this->model = new empleadosModel();

    }

    public function guardar($NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado){
     $idEmpleado =  $this->model->insertar($NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado);
     //return ($idEmpleado!=false) ? header("Location:show.php?idEmpleado=".$idEmpleado)  :  header("Location:IngresarEmpleado.php");
    }
    public function show($idEmpleado){
      return($this->model->show($idEmpleado) != false) ? $this->model->show($idEmpleado)  : header("Location:index.php");
    }
    public function index(){
      return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($idEmpleado, $NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado){
      return ($this->model->update($idEmpleado, $NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado) != false) ? header("Location:show.php?idEmpleado=".$idEmpleado)  :  header("Location:index.php");
    }
     public function delete($idEmpleado){
      return ($this->model->delete($idEmpleado)) ? header("Location:index.php") : header("Location:show.php?idEmpleado=".$idEmpleado);
    }


}


?>