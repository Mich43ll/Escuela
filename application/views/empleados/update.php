<?php
    require_once("C://xampp/htdocs/Escuela/controller/empleadosController.php");
    $obj = new empleadosController();
    $user = $obj->update(
                        $_POST['idEmpleado'],
                        $_POST['NombreCompleto'],
                        $_POST['idCargo'],
                        $_POST['Direccion'],
                        $_POST['Telefono'],
                        $_POST['Estado']);
?>