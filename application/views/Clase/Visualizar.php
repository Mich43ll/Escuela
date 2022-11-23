<?php

require_once("C://xampp/htdocs/Escuela/controller/pruebaController.php");
$obj = new pruebaController();
$obj->guardar(
$_POST['prueba']
);



?>