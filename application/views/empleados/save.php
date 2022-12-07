<h1 style= text-align:center>Ingresar Empleados</h1>
<form action="<?php anchor("empleados/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">
  <div style="color:#a94442;background-color:#f2dede;border-color:#ebccd1; border-radius:5px"><?php echo validation_errors();?></div>
  <p>
    <label for="text">NombreCompleto</label>
    <input type="text" name="NombreCompleto" required>
  </p>

  <p>
    <label for="text">idCargo</label>
    <input type="text" name="idCargo" required>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
     Lista de Cargos
    </button>
  </p>

  <p>
    <label for="text">Direccion</label>
    <input type="text" name="Direccion" required>
  </p>

  <p>
    <label for="text">Telefono</label>
    <input type="text" name="Telefono" required>
  </p>
  
  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado" required>
  </p>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('/inicio','Cancelar','class="btn btn-danger"');?>
 
  </div>


</form>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table>
                    <thead>
                        <tr>
                            <th scope="col">idCargo</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $f){ ?>
                        <tr>
                            <td><?php echo $f['idCargo'];?></td>
                            <td><?php echo $f['Cargo'];?></td>
                            <td><?php echo $f['Estado'];?></td>
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