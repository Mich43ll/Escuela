<?php
require '/application/models/usuarioModel.php';

$obUser=new UsuarioModel();

if(isset($_REQUEST["validar"])){
    $r=$obUser->validarUsuario($_REQUEST["Usuario"],$_REQUEST["Contraseña"]);
    if($r==1){
        session_start();
        $_SESSION["s1"]=$_REQUEST["Usuario"];
        header("Location: ../index.php");
    }
    else
        echo "<script>alert('Usuario o Contraseña no validos')</script>";
}

require '/application/views/login/login.php';
?>