<h1 style= text-align:center>Ingresar Alumnos</h1>
<form action="<?php anchor("alumnos/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">
  <div style="color:#a94442;background-color:#f2dede;border-color:#ebccd1; border-radius:5px"><?php echo validation_errors();?></div>
  <p>
    <label for="text">NombreCompleto</label>
    <input type="text" name="NombreCompleto" required >
  </p>

  <p>
    <label for="text">Direccion</label>
    <input type="text" name="Direccion" required>
  </p>

  <p>
    <label for="text">Genero</label>
    <input type="text" name="Genero" required>
  </p>

  <p>
    <label for="text">Edad</label>
    <input type="text" name="Edad" required>
  </p>
  
  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado" required>
  </p>
  <p>
    <label for="text">idGrado</label>
    <input type="text" name="idGrado" required>
  </p>

  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('/inicio','Cancelar','class="btn btn-danger"');?>
 
  </div>


</form>