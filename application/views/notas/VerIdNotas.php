<?php
require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/notasController.php");

$obj = new notasController();
$notas = $obj->visualizar($_GET['idNotas']);
?>
<!--END HEADER-->

<a href="indexNota.php" class="btn btn-primary ">Regresar</a>
<a href="edit.php?idNotas=<?=$notas[0]?>" class="btn btn-success">Actualizar</a>


<!---MODAL ELIMINAR-------------------------------->
<!-- Button trigger modal -->
<a  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Desea eliminar el registro de <?=$notas[7]?> ?  </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Una vez eliminado, no podra ser revertido nuevamente el registro.
      </div>
      <div class="modal-footer">
      
        <a href="delete.php?idNotas=<?=$notas[0] ?>" type="button" class="btn btn-danger">Eliminar</a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>




<!------------------MODAL ELIMINAR---------------->


<table class=" table caption-top table-secondary table-bordered border-dark table-responsive">
  <caption>Listado de Alumnos con Notas</caption>
  <thead class="table-dark table-bordered border-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ALUMNO</th>
      <th scope="col">CLASE</th>
      <th scope="col">PRIMER PARCIAL</th>
      <th scope="col">SEGUNDO PARCIAL</th>
      <th scope="col">TERCER PARCIAL</th>
      <th scope="col">PROMEDIO</th>
      <th scope="col">MAESTRO</th>
  
    </tr>
  </thead>
  <!--FINAL DEL HEAD-->


  <!--INICIO DEL BODY-->
  <tbody>
        <tr>
   
            <td scope="col"><?= $notas[0] ?></td>
            <td scope="col"><?= $notas[6] ?></td>
            <td scope="col"><?= $notas[5] ?></td>
            <td scope="col"><?= $notas[1] ?></td>
            <td scope="col"><?= $notas[2] ?></td>
            <td scope="col"><?= $notas[3] ?></td>
            <td scope="col"><?= $notas[4] ?></td>
            <td scope="col"><?= $notas[7] ?></td>
  
        </tr>
  </tbody>
</table>

<br>

<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>