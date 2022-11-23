<?php
    require_once("C://xampp/htdocs/Escuela/view/head/head.php");
    require_once("C://xampp/htdocs/Escuela/controller/empleadosController.php");
    $obj = new empleadosController();
    $obj->delete($_GET['idEmpleado']);
?>