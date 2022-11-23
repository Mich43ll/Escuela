<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");

require_once("C://xampp/htdocs/Escuela/controller/clasescontroller.php");

?>

<link rel="stylesheet" href="./css/form.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<style>
.error{
  background-color: #FF9185;
  font-size: 12px;
  padding: 10px;
} 

.correcto{
  background-color: #A0DEA7;
  font-size: 12px;
  padding: 10px;
} 

</style>



<form action="IngresarClase.php"  method ="POST" autocomplete="off">


<?php
  if (isset($_POST['submit'])){
    $NombreClase = $_POST['NombreClase'];
  $Estado = $_POST['Estado'];
  $idEmpleado = $_POST['idEmpleado'];

  $campos = array();
  if ($NombreClase == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo  vacio</h2>");
  }
  if ($Estado == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo vacio</h2>");
  }
  if ($idEmpleado == "") {
    array_push($campos, "<h2 class='error'>* No puede dejar el campo vacio</h2>");
  }
  if (count($campos) > 0) {
    for ($i = 0; $i < count($campos); $i++) {
      echo $campos[$i];
    }
  } else {
    $obj = new clasesController();
    $obj->guardar(
      $NombreClase = $_POST['NombreClase'],
      $Estado = $_POST['Estado'],
      $idEmpleado = $_POST['idEmpleado'],
    );

      echo"<h2 class='correcto'>Datos ingresados correctamente</h2>";
    }
  }
  ?>


<h1>Ingresar Clase</h1>
  <div class="inset">

  <p>
    <label for="text">Nombre Clase</label>
    <input type="text" name="NombreClase" >
  </p>

  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado">
  </p>



  <p>
    <label for="text">Id Empleado</label>
    <input type="text" name="idEmpleado" >
  </p>



  <button type="submit" name= "submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="/escuela/view/Clase/indexClase.php">Cancelar</a>
 
 
  
  </div>

  <?php
require_once("C://xampp/htdocs/Escuela/view/Clase/IngresarClase.php");
?>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>