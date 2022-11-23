<?php
    require_once("C://xampp/htdocs/Escuela/view/head/head.php");
    require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
    $obj = new alumnosController();
    $obj->delete($_GET['idAlumno']);
?>