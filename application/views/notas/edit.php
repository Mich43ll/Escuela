<?php

require_once("C://xampp/htdocs/Escuela/controller/notasController.php");
$obj = new notasController();
$alumno = $obj->visualizar($_GET['idNotas']);
//print_r( $obj->visualizar($_GET['idNotas']));
?>

<!----FORMULARIO DE MODIFICAR---->

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="update.php"  method ="POST" autocomplete="off">
  <h1>Modificar Notas del Alumno</h1>
  <div class="inset">

  <p>
    <label for="text">ID</label>
    <input type="text" readonly name="idNotas" value="<?=$alumno[0] ?>" >
  </p>

  <p>
    <label for="text">Primer Parcial</label>
    <input type="text" name="primerParcial"  value="<?=$alumno[1] ?>"  >
  </p>

  <p>
    <label for="text">Segundo Parcial</label>
    <input type="text" name="segundoParcial"  value="<?=$alumno[2] ?>" >
  </p>



  <p>
    <label for="text">Tercer Parcial</label>
    <input type="text" name="tercerParcial"  value="<?=$alumno[3] ?>" >
  </p>




  <p>
    <label for="text">Clase</label>
    <input type="text" name="idClase"  value="<?=$alumno[5] ?>" >
  </p>

  <p>
    <label for="text">Alumno</label>
    <input type="text" name="idAlumno"  value="<?=$alumno[6] ?>" >
  </p>

  <p>
    <label for="text">Maestro</label>
    <input type="text" name="idEmpleado"  value="<?=$alumno[7] ?>"  >
  </p>


  <div class="acciones">
  <input type="submit" class="btn btn-success" value="Actualizar">
  <a class="btn btn-danger" href="indexNota.php">Cancelar</a>
</div>

 
  
  </div>

  



</form>









<!-----FORMULARIO DE MODIFICAR----->





<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>