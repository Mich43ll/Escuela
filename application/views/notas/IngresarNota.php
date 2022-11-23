<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");

require_once("C://xampp/htdocs/Escuela/controller/notasController.php");


?>

<link rel="stylesheet" href="./css/form.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<style>
  .error {
    background-color: #FF9185;
    font-size: 14px;
    padding: 10px;
    color: #000;
  }

  .correcto {
    background-color: #A0DEA7;
    font-size: 14px;
    padding: 10px;
    color: #000;
  }
</style>



<form action="IngresarNota.php" method="POST" autocomplete="off">


  <?php
  if (isset($_POST['primerParcial'])){
    $primero = $_POST['primerParcial'];
  $segundo = $_POST['segundoParcial'];
  $tercero = $_POST['tercerParcial'];
  $promedio = ((int)$primero + (int)$segundo + (int)$tercero) / 3;
  $alumno = $_POST['idAlumno'];
  $clase = $_POST['idClase'];
  $empleado = $_POST['idEmpleado'];

  $campos = array();
  if ($primero == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo primer parcial vacio</h2>");
  }
  elseif(!is_numeric($primero)){
    array_push($campos, "<h2 class='error'>* solo se aceptan numeros en el campo primer parcial</h2>");
  }
  if($primero > 100){
    array_push($campos, "<h2 class='error'>* El alumno no puede tener mas de 100 puntos en el primer parcial</h2>");
  }
  
  if ($segundo == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo segundo parcial vacio</h2>");
  }

  elseif(!is_numeric($segundo)){
    array_push($campos, "<h2 class='error'>* solo se aceptan numeros en el campo segundo parcial</h2>");
  }

  if($segundo > 100){
    array_push($campos, "<h2 class='error'>* El alumno no puede tener mas de 100 puntos en el segundo parcial</h2>");
  }
  if ($tercero == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo tercer parcial vacio</h2>");
  }

  elseif(!is_numeric($tercero)){
    array_push($campos, "<h2 class='error'>* solo se aceptan numeros en el campo tercer parcial</h2>");
  }
    
  if($tercero > 100){
    array_push($campos, "<h2 class='error'>* El alumno no puede tener mas de 100 puntos en el tercer parcial</h2>");
  }
  if ($alumno == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo Id Alumno vacio</h2>");
  }
  elseif(!is_numeric($alumno)){
    array_push($campos, "<h2 class='error'>* solo se aceptan numeros en el campo Alumno</h2>");
  }
  if ($clase == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo Id Clase vacio</h2>");
  }
  elseif(!is_numeric($clase)){
    array_push($campos, "<h2 class='error'>* solo se aceptan numeros en el campo de Clase</h2>");
  }
  if ($empleado == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo Id Empleado vacio</h2>");
  }
  elseif(!is_numeric($empleado)){
    array_push($campos, "<h2 class='error'>* solo se aceptan numeros en el campo de empleado</h2>");
  }

  if (count($campos) > 0) {
    for ($i = 0; $i < count($campos); $i++) {
      echo $campos[$i];
    }
  } else {
    $obj = new notasController();
    $obj->guardar(
        $primero = $_POST['primerParcial'],
        $segundo = $_POST['segundoParcial'],
        $tercero = $_POST['tercerParcial'],
        $promedio = ((int)$primero + (int)$segundo + (int)$tercero) / 3,
        $alumno = $_POST['idAlumno'],
        $clase = $_POST['idClase'],
        $empleado = $_POST['idEmpleado']
      );
      echo"<h2 class='correcto'>Datos ingresados correctamente</h2>";
    }
  }

  ?>
  <h1>Ingresar Notas del Alumno</h1>
  <div class="inset">

    <p>
      <label for="text">Primer Parcial</label>
      <input type="text" name="primerParcial">
    </p>

    <p>
      <label for="text">Segundo Parcial</label>
      <input type="text" name="segundoParcial">
    </p>



    <p>
      <label for="text">Tercer Parcial</label>
      <input type="text" name="tercerParcial">
    </p>




    <p>
      <label for="text">Clase</label>
      <input type="text" name="idClase">
    </p>



    <p>
      <label for="text">Alumno</label>
      <input type="text" name="idAlumno">
    </p>

    <p>
      <label for="text">Maestro</label>
      <input type="text" name="idEmpleado">
    </p>



    <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="indexNota.php">Cancelar</a>


  </div>
</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>