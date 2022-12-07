<?php

require_once("C://xampp/htdocs/Escuela/controller/matriculascontroller.php");
$obj = new matriculasController();
$alumno = $obj->visualizar($_GET['idMatricula']);

?>

<!----FORMULARIO DE MODIFICAR---->

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="update.php"  method ="POST" autocomplete="off">
  <h1>Modificar Matriculas</h1>
  <div class="inset">


  <p>
    <label for="text">ID</label>
    <input type="text" readonly name="idMatricula" readonly value="<?=$alumno[0] ?>" >
  </p>
  <p>
    <label for="text">ID ALUMNOS</label>
    <input type="text" readonly name="IdAlumno" value="<?=$alumno[1] ?>" >
  </p>

  <p>
    <label for="text">JORNADA</label>
    <input type="text" name="Jornada"  value="<?=$alumno[2] ?>"  >
  </p>

  <p>
    <label for="text">ID GRADO</label>
    <input type="text" name="idGrado"  value="<?=$alumno[3] ?>" >
  </p>


  

  <div class="acciones">
  <input type="submit" class="btn btn-success" value="Actualizar">
  <a class="btn btn-danger" href="indexmatricula.php?idNotas=<?$alumno[0]?>">Cancelar</a>
</div>

 
  
  </div>

  



</form>









<!-----FORMULARIO DE MODIFICAR----->





<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>