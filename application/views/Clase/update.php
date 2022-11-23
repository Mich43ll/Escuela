<?php

require_once("C://xampp/htdocs/Escuela/controller/clasescontroller.php");
$obj = new clasesController();
$obj->update(
    $_POST['idClase'],
$_POST['NombreClase'],
$_POST['Estado'],
$_POST['idEmpleado'],
);

?>