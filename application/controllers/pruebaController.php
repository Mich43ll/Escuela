<?php

class pruebaController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/pruebaModel.php");
        $this->model = new pruebaModel();

    }

    public function guardar($prueba){
     $id =  $this->model->insertar($prueba);
     return ($id!=false) ? header("Location:show.php?id=".$id)  :  header("Location:Ingresar.php");
    }



}


?>