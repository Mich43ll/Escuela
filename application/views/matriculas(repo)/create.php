<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/matriculascontroller.php");

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

<form action="create.php"  method ="POST" autocomplete="off">
<?php

if(isset($_POST['IdAlumno'])){
  $IdAlumno=$_POST['IdAlumno'];
  $Jornada=$_POST['Jornada'];
  $idGrado=$_POST['idGrado'];

    $campos = array();
  
    if($IdAlumno==""){
      array_push($campos, "<h2 class='error'>* No puede dejar el Id Alumnos vacio</h2>");
    }
    
    elseif (!is_numeric($IdAlumno)) {
      array_push($campos, "<h2 class='error'>* Solo peude agregar numeros no texto en el Id Alumno Numeros</h2>");
  }
    if($Jornada==""){
      array_push($campos, "<h2 class='error'>* No puede dejar el Jornada vacio</h2>");
    }
    elseif (is_numeric($Jornada))
    array_push($campos, "<h2 class='error'>* No puede dejar el Jornada vacio</h2>");
  
    if($idGrado==""){
      array_push($campos, "<h2 class='error'>* No puede dejar el IdGrado vacio</h2>");
    }


   elseif (!is_numeric($idGrado)) {
    array_push($campos, "<h2 class='error'>* Solo puede gregar Numeros no puede agregar texto</h2>");
}




    if(count($campos)>0){
      for($i = 0; $i <count($campos); $i++){
        echo $campos[$i];
      }
    
    }
    else{
      $obj = new matriculasController();
      $obj->guardar(
        $IdAlumno=$_POST['IdAlumno'],
        $Jornada=$_POST['Jornada'],
        $idGrado=$_POST['idGrado']
      );

      echo"<h2 class='correcto'>Datos ingresados correctamente</h2>";

    }

    }
    
  
?>
  <h1>Ingresar Matricula</h1>
  <div class="inset">

  <p>
    <label for="text">Id Alumno</label>
    <input type="text" name="IdAlumno" >
  </p>

  <p>
    <label for="text">Jornada</label>
    <input type="text" name="Jornada">
  </p>



  <p>
    <label for="text">Id Grado</label>
    <input type="text" name="idGrado" >
  </p>

  <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
 
 
  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>