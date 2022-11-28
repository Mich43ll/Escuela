<h1 style= text-align:center>Ingresar Alumnos</h1>
<form action="<?php anchor("alumnos/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">

  <p>
    <label for="text">NombreCompleto</label>
    <input type="text" name="NombreCompleto" >
  </p>

  <p>
    <label for="text">Direccion</label>
    <input type="text" name="Direccion">
  </p>

  <p>
    <label for="text">Genero</label>
    <input type="text" name="Genero" >
  </p>

  <p>
    <label for="text">Edad</label>
    <input type="text" name="Edad">
  </p>
  
  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado">
  </p>
  <p>
    <label for="text">idGrado</label>
    <input type="text" name="idGrado">
  </p>

  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('/inicio','Cancelar','class="btn btn-danger"');?>
 
  </div>


</form>