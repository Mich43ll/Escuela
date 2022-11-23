<?php

require_once("C://xampp/htdocs/Escuela/controller/empleadosController.php");
$obj = new empleadosController();
$obj->guardar(
$_POST['NombreCompleto'],
$_POST['idCargo'],
$_POST['Direccion'],
$_POST['Telefono'],
$_POST['Estado']);

?>