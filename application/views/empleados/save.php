<h1 style= text-align:center>Ingresar Empleados</h1>
<form action="<?php anchor("empleados/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">

  <p>
    <label for="text">NombreCompleto</label>
    <input type="text" name="NombreCompleto" >
  </p>

  <p>
    <label for="text">idCargo</label>
    <input type="text" name="idCargo">
  </p>

  <p>
    <label for="text">Direccion</label>
    <input type="text" name="Direccion" >
  </p>

  <p>
    <label for="text">Telefono</label>
    <input type="text" name="Telefono">
  </p>
  
  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado">
  </p>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('/inicio','Cancelar','class="btn btn-danger"');?>
 
  </div>


</form>