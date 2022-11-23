<?php
require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/empleadosController.php");
$obj = new empleadosController();
$data = $obj->show($_GET['idEmpleado']);
?>


<h2 class="text-center">Lista de Empleados</h2>
<table class="table container-fluid">
  <thead>
    <tr>
      <th scope="col">NombreCompleto</th>
      <th scope="col">idCargo</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col"><?= $data[1]?></td>
      <td scope="col"><?= $data[2]?></td>
      <td scope="col"><?= $data[3]?></td>
      <td scope="col"><?= $data[4]?></td>
      <td scope="col"><?= $data[5]?></td>
    </tr>
  </tbody>
</table>
<div class="pb-3">
  <a href="ListarEmpleados.php" class="btn btn-primary">Regresar</a>
  <a href="edit.php?idEmpleado=<?= $data[0]?>" class="btn btn-success">Actualizar</a>
  <!-- Button trigger modal -->
<a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>


<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro de <?=$data[1]?>?</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              !Una vez eliminado no podra recuperar el cambio que realizó!
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
              <a href="delete.php?idEmpleado=<?= $data[0]?>" class="btn btn-danger">Eliminar</a>
              <!--<button type="button">Eliminar</button> -->
          </div>
      </div>
    </div>
  </div>
</div>


<?php
require_once("C://xampp/htdocs/Escuela/view/head/footer.php");
?>