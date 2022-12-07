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
