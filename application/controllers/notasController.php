<?php

class notasController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/notasModel.php");
        $this->model = new notasModel();

    }

    public function guardar($primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado){
     $idNotas =  $this->model->insertar($primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado);
     //return ($idNotas!=false) ? header("Location:indexNota.php")  :  header("Location:IngresarNota.php");
    }


    public function visualizar($idNotas){
      return($this ->model->visualizar($idNotas)!=false)? $this->model->visualizar($idNotas): header("Location:VerIdNotas.php");
    }

    public function indexNota(){
      return($this->model->indexNota()) ? $this->model->indexNota() : false; 
    }

    public function indiceprueba(){
      return($this->model->indiceprueba()) ? $this->model->indiceprueba() : false; 
    }

    public function update($idNotas, $primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado){
      return ($this->model->update($idNotas,$primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado) != false) 
      ? header("Location:indexNota.php") : header("Location:VerIdNotas.php?idNotas=".$idNotas) ;
    }

    public function delete($idNotas){
      return ($this->model->delete($idNotas)) ? header("Location:indexNota.php") : header("Location:VerIdNotas.php?idNotas=".$idNotas) ;
    }

    

}


?>