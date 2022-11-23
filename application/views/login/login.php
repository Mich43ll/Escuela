<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Escuela de Musica


  </title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<link rel="stylesheet" href="login/css/form.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<style>
  .error {
    background-color: #FF9185;
    font-size: 12px;
    padding: 10px;
  }

  .correcto {
    background-color: #A0DEA7;
    font-size: 12px;
    padding: 10px;
  }
</style>



<form action="#" method="POST" autocomplete="off">
  <h1>Ingresar Notas del Alumno</h1>
  <div class="inset">

    <p>
      <label for="text">Usuario</label>
      <input type="text" name="Usuario">
    </p>

    <p>
      <label for="text">Contraseña</label>
      <input type="password" name="Contraseña">
    </p>


    <button type="submit" class="btn btn-primary" name="validar">Ingresar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>



  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>