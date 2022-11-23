
<?php
require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/empleadoscontroller.php");
?>

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->

<form action="IngresarEmpleado.php"  method ="POST" autocomplete="off">
<?php
    if(isset($_POST['NombreCompleto'])){
      $nombre= $_POST['NombreCompleto'];
      $idCargo= $_POST['idCargo'];
      $direccion= $_POST['Direccion'];
      $telefono= $_POST['Telefono'];
      $estado= $_POST['Estado'];

      $campos = array();
      if($nombre == ""){
        array_push($campos, "El campo NombreCompleto no puede estar vacío");
      }elseif(strlen($nombre)>100 || strlen($nombre) <3){
        array_push($campos, "El campo NombreCompleto debe tener entre 3 a 100 caracteres");
      }
      if($idCargo == ""){
        array_push($campos, "El campo idCargo no puede estar vacío");
      }
      if($direccion == ""){
        array_push($campos, "El campo direccion no puede estar vacío");
      }elseif(strlen($direccion)>200 || strlen($direccion) <5){
        array_push($campos, "El campo direccion debe tener entre 5 a 200 caracteres");
      }
      if($telefono == ""){
        array_push($campos, "El campo telefono no puede estar vacío");
      }elseif(strlen($telefono) <8 ||strlen($telefono) >8){
        array_push($campos, "El campo telefono debe tener 8 digitos");
      }
      if($estado == ""){
        array_push($campos, "El campo estado no puede estar vacío");
      }

      if(count($campos) >0){
        echo "error";
        for($i = 0; $i < count($campos); $i++){
            echo "<li>".$campos[$i]."</li>";
        }
      }else{
          echo "Datos Ingresados Corectamente";
          $obj = new empleadosController();
          $obj->guardar(
          $nombre= $_POST['NombreCompleto'],
          $idCargo= $_POST['idCargo'],
          $direccion= $_POST['Direccion'],
          $telefono= $_POST['Telefono'],
          $estado= $_POST['Estado'],);
      }
    }

?>
  <h1>Ingresar Empleado</h1>
  <div class="inset">

  <p>
    <label for="text">NombreCompleto</label>
    <input type="text" name="NombreCompleto" >
  </p>

  <p>
    <label for="text">idCargo</label>
    <input type="text" name="idCargo">
  </p>

  <p>
    <label for="text">Direccion</label>
    <input type="text" name="Direccion" >
  </p>

  <p>
    <label for="text">Telefono</label>
    <input type="text" name="Telefono">
  </p>
  
  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado">
  </p>

  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <a class="btn btn-danger" href="ListarEmpleados.php">Cancelar</a>
 
  </div>


</form>

<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>