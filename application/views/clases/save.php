

<h1 style= text-align:center>Ingresar notas</h1>
<form action="<?php anchor("clases/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">
  <div style="color:#a94442;background-color:#f2dede;border-color:#ebccd1; border-radius:5px"><?php echo validation_errors();?></div>
  <p>
    <label for="text">Nombre de la Clase</label>
    <input type="text" name="NombreClase" required>
  </p>

  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado" required>
  </p>

  <p>
    <label for="text">ID Empleado</label>
    <input type="text" name="idEmpleado" required>
  </p>

  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('clases/show','Cancelar','class="btn btn-danger"');?>
 
  </div>



</form>