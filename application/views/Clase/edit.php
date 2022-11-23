<?php

require_once("C://xampp/htdocs/Escuela/controller/clasescontroller.php");
$obj = new clasesController();
$alumno = $obj->visualizar($_GET['idClase']);

?>

<!----FORMULARIO DE MODIFICAR---->

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="update.php"  method ="POST" autocomplete="off">
  <h1>Modificar clases</h1>
  <div class="inset">

  <p>
    <label for="text">ID</label>
    <input type="text" readonly name="idClase" value="<?=$alumno[0] ?>" >
  </p>

  <p>
    <label for="text">Nombre Clase</label>
    <input type="text" name="NombreClase"  value="<?=$alumno[1] ?>"  >
  </p>

  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado"  value="<?=$alumno[2] ?>" >
  </p>



  <p>
    <label for="text">Id Empleado</label>
    <input type="text" name="idEmpleado"  value="<?=$alumno[3] ?>" >
  </p>

  
  <div class="acciones">
  <input type="submit" class="btn btn-success" value="Actualizar">
  <a class="btn btn-danger" href="indexClase.php">Cancelar</a>
</div>

 
  
  </div>

  



</form>









<!-----FORMULARIO DE MODIFICAR----->





<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>