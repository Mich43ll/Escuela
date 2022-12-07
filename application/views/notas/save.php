

<h1 style= text-align:center>Ingresar notas</h1>
<form action="<?php anchor("notas/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">
  <div style="color:#a94442;background-color:#f2dede;border-color:#ebccd1; border-radius:5px"><?php echo validation_errors();?></div>
  <p>
    <label for="text">Primer Parcial</label>
    <input type="text" name="primerParcial" required>
  </p>

  <p>
    <label for="text">Segundo Parcial</label>
    <input type="text" name="segundoParcial" required>
  </p>

  <p>
    <label for="text">Tercer Parcial</label>
    <input type="text" name="tercerParcial" required>
  </p>
  
  <p>
    <label for="text">idClase</label>
    <input type="text" name="idClase" required>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
     Lista de Clases
    </button>
  </p>
  <p>
    <label for="text">idAlumno</label>
    <input type="text" name="idAlumno" required>
  </p>
  <p>
    <label for="text">idEmpleado</label>
    <input type="text" name="idEmpleado" required>
  </p>

  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('notas/show','Cancelar','class="btn btn-danger"');?>
 
  </div>

</form>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Lista de clases</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table>
                    <thead>
                        <tr>
                            <th scope="col">idClase</th>
                            <th scope="col">Nombre Clase</th>
                            <th scope="col">Estado</th>
                            <th scope="col">ID Empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $f){ ?>
                        <tr>
                            <td><?php echo $f['idClase'];?></td>
                            <td><?php echo $f['NombreClase'];?></td>
                            <td><?php echo $f['Estado'];?></td>
                            <td><?php echo $f['idEmpleado'];?></td>
                            </td>
                        </tr>  
                        <?php } ?>
                    </tbody>
                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>